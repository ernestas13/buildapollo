// document.getElementById('submitBtn').addEventListener('click', async function(event) {
//     event.preventDefault();

//     const formData = {
//         name: document.getElementById('name').value,
//         email: document.getElementById('email').value,
//         phone: document.getElementById('phone').value,
//         message: document.getElementById('message').value,
//         subject: 'Contact Form Submission' // You can customize the subject here
//     };

//     try {
//         const response = await fetch('https://your-api-endpoint.amazonaws.com/send-email', {
//             method: 'POST',
//             body: JSON.stringify(formData),
//             headers: {
//                 'Content-Type': 'application/json'
//             }
//         });

//         const result = await response.json();
        
//         if (response.ok) {
//             // Show success message
//             document.querySelector('.response-message .modal-body').innerText = 'Your message has been successfully sent!';
//             $('.response-message').modal('show');
            
//             // Clear the form after success
//             document.getElementById('contact-form').reset();
//         } else {
//             // Show error message
//             document.querySelector('.response-message .modal-body').innerText = 'Error sending message: ' + result.message;
//             $('.response-message').modal('show');
//         }
//     } catch (error) {
//         console.error('Error submitting form:', error);
//         // Show error message
//         document.querySelector('.response-message .modal-body').innerText = 'Failed to send message.';
//         $('.response-message').modal('show');
//     }
// });

document.getElementById('submitBtn').addEventListener('click', function (event) {
    event.preventDefault();

    // Get form field values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    // Simple validation
    if (name === '' || email === '' || message === '') {
        alert('Please fill in all required fields.');
        return;
    }

    // Create the payload for Lambda
    const payload = {
        name: name,
        email: email,
        phone: phone,
        message: message
    };

    // Send the form data to your Lambda function using fetch
    fetch('https://pcq57hb7aa.execute-api.eu-north-1.amazonaws.com/prod', { // Replace with your actual API Gateway URL
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(payload)
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Your message has been sent successfully!');
        } else {
            alert('There was an error sending your message. Please try again later.');
        }
    })
    .catch((error) => {
        console.error('Error:', error);
        alert('There was a problem with your submission.');
    });
});
