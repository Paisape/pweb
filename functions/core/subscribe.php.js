export async function onRequestPost(context) {
  try {
    const contentType = context.request.headers.get('content-type') || '';
    let email = '';

    if (contentType.includes('application/json')) {
      const body = await context.request.json();
      email = body.email || '';
    } else {
      const formData = await context.request.formData();
      email = formData.get('email') || '';
    }

    if (!email || !email.includes('@')) {
      return new Response(JSON.stringify({ status: 'error', message: 'Please enter a valid email address.' }), {
        status: 400,
        headers: { 'Content-Type': 'application/json' }
      });
    }

    // Optional: Notify team or send confirmation via Resend if API key is present
    const resendApiKey = context.env.RESEND_API_KEY;
    if (resendApiKey) {
      await fetch('https://api.resend.com/emails', {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${resendApiKey}`,
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          from: 'Paisape Website <notifications@paisape.in>',
          to: ['info@paisape.in'],
          subject: `New Newsletter Subscriber: ${email}`,
          html: `<p>New subscriber joined your newsletter list from the blog:</p><p><strong>${email}</strong></p>`
        })
      }).catch(() => {});
    }

    return new Response(JSON.stringify({ status: 'success', message: 'Thank you for subscribing! You are on the list.' }), {
      status: 200,
      headers: { 'Content-Type': 'application/json' }
    });
  } catch (error) {
    return new Response(JSON.stringify({ status: 'error', message: 'Subscription failed. Please try again.' }), {
      status: 500,
      headers: { 'Content-Type': 'application/json' }
    });
  }
}
