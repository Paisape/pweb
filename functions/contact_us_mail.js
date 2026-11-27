export async function onRequestPost(context) {
  try {
    const contentType = context.request.headers.get('content-type') || '';
    let name = '';
    let email = '';
    let phone = '';
    let message = '';

    if (contentType.includes('application/json')) {
      const body = await context.request.json();
      name = body.name || '';
      email = body.email || '';
      phone = body.phone || '';
      message = body.message || '';
    } else {
      const formData = await context.request.formData();
      name = formData.get('name') || '';
      email = formData.get('email') || '';
      phone = formData.get('phone') || '';
      message = formData.get('message') || '';
    }

    if (!name || !email || !message) {
      return new Response(JSON.stringify({ status: 'error', message: 'Please fill all required fields.' }), {
        status: 400,
        headers: { 'Content-Type': 'application/json' }
      });
    }

    const resendApiKey = context.env.RESEND_API_KEY;
    if (!resendApiKey) {
      return new Response(JSON.stringify({ status: 'success', message: 'Inquiry received.' }), {
        status: 200,
        headers: { 'Content-Type': 'application/json' }
      });
    }

    const emailResponse = await fetch('https://api.resend.com/emails', {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${resendApiKey}`,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        from: 'Paisape Website <notifications@paisape.in>',
        to: ['info@paisape.in'],
        reply_to: email,
        subject: `New Lead from Website: ${name}`,
        html: `
          <h2>New Contact Inquiry</h2>
          <p><strong>Name:</strong> ${name}</p>
          <p><strong>Email:</strong> ${email}</p>
          <p><strong>Phone:</strong> ${phone}</p>
          <p><strong>Message:</strong></p>
          <p>${message}</p>
        `
      })
    });

    return new Response(JSON.stringify({ status: 'success', message: 'Thank you! Your message has been received.' }), {
      status: 200,
      headers: { 'Content-Type': 'application/json' }
    });
  } catch (error) {
    return new Response(JSON.stringify({ status: 'error', message: 'Unable to process request.' }), {
      status: 500,
      headers: { 'Content-Type': 'application/json' }
    });
  }
}
