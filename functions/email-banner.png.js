export async function onRequest(context) {
  const url = new URL(context.request.url);
  
  // Get day of week in Asia/Kolkata timezone
  const kolkataFormatter = new Intl.DateTimeFormat('en-US', {
    timeZone: 'Asia/Kolkata',
    weekday: 'long'
  });
  const requestedDay = (url.searchParams.get('day') || kolkataFormatter.format(new Date())).toLowerCase();

  const allowedDays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
  const dayKey = allowedDays.includes(requestedDay) ? requestedDay : 'default';

  const bannerAssetUrl = new URL(`/assets/banners/${dayKey}.png`, context.request.url);
  const response = await context.env.ASSETS.fetch(bannerAssetUrl);

  if (response.status === 200) {
    const headers = new Headers(response.headers);
    headers.set('Content-Type', 'image/png');
    headers.set('Cache-Control', 'no-cache, no-store, must-revalidate, max-age=0');
    headers.set('Pragma', 'no-cache');
    headers.set('Expires', '0');
    headers.set('X-Served-Day', dayKey.charAt(0).toUpperCase() + dayKey.slice(1));

    return new Response(response.body, {
      status: 200,
      headers: headers
    });
  }

  // Fallback if day asset is not found
  const fallbackUrl = new URL('/assets/paisape-email-banner.png', context.request.url);
  return context.env.ASSETS.fetch(fallbackUrl);
}
