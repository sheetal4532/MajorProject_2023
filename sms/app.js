// Twilio credentials
const accountSid = '';
const authToken = '';
const twilioPhoneNumber = '+13158738257'; // Replace with your Twilio phone number
// Required dependencies
const twilio = require('twilio')(accountSid, authToken);
// Function to send an SMS
function sendSMS(toPhoneNumber, message) {
  twilio.messages
    .create({
      body: message,
      from: twilioPhoneNumber,
      to: toPhoneNumber
    })
    .then(message => console.log('SMS sent successfully. SID:', message.sid))
    .catch(error => console.error('Error sending SMS:', error));
}
// Usage example
const recipientPhoneNumber = '+91....'; // Replace with the recipient's phone number
const smsMessage = 'Thanks for shopping with veggies shopping ! We would love to hear about your product quality experience ';
sendSMS(recipientPhoneNumber, smsMessage);
