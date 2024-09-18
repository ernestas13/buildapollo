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

    console.log('Payload:', JSON.stringify(payload));

    // Send the form data to your Lambda function using fetch
    fetch('https://pcq57hb7aa.execute-api.eu-north-1.amazonaws.com/prod/contact', { // Replace with your actual API Gateway URL
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        console.log("Response Status:", response.status); // Log the response status
        return response.text(); // Read response as text first
    })
    .then(text => {
        console.log("Response Text:", text); // Log the response text
        try {
            const data = JSON.parse(text); // Parse JSON manually
            console.log("Parsed Data:", data); // Log the parsed data

            if (data.status === 'success') {
                alert('Your message has been sent successfully!');
            } else {
                alert('There was an error sending your message. Please try again later.');
            }
        } catch (error) {
            console.error('JSON Parsing Error:', error);
            alert('There was a problem with your submission.');
        }
    })
    .catch(error => {
        console.error('Fetch Error:', error);
        alert('There was a problem with your submission.');
    });
});


// document.getElementById('submitBtn').addEventListener('click', function (event) {
//     event.preventDefault();

//     // Get form field values
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const phone = document.getElementById('phone').value;
//     const message = document.getElementById('message').value;

//     // Simple validation
//     if (name === '' || email === '' || message === '') {
//         alert('Please fill in all required fields.');
//         return;
//     }

//     // Create the payload for Lambda
//     const payload = {
//         name: name,
//         email: email,
//         phone: phone,
//         message: message
//     };

//     console.log('Payload:', JSON.stringify(payload));

//     // Send the form data to your Lambda function using fetch
//     fetch('https://pcq57hb7aa.execute-api.eu-north-1.amazonaws.com/prod/contact', { // Replace with your actual API Gateway URL
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(payload)
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.status === 'success') {
//             alert('Your message has been sent successfully!');
//         } else {
//             alert('There was an error sending your message. Please try again later.');
//         }
//     })
//     .catch((error) => {
//         console.error('Error:', error);
//         alert('There was a problem with your submission.');
//     });
// });
