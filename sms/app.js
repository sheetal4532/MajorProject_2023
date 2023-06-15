// const express = require('express')
// const twilio = require('twilio')
// const dotenv = require('dotenv')
// const app = express()

//  dotenv.config()

//  function sendSMS(){

//  const client = new twilio(process.env.TWILIO_SID ,process.env.TWILIO_AUTH_TOKEN)

//  return  client.messages
//  .create({body:'hey ur delivery has been delivered' , from:'+918223927220' , to: process.env.PHONE_NUMBER})
//  .then(message => {
    
//         console.log(message , "Message sent")

// })
//  .catch(err =>  {
    
//     console.log(err , "Message not sent")

// })

// }

// sendSMS()

// app.listen(5000 , () => console.log('listening at port 5000'))

// Twilio credentials
const accountSid = 'AC2e70d9b7533eadab010f5a9093bb6790';
const authToken = '86fc113ff8bdeb120f03ed9b826ade15';
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
const recipientPhoneNumber = '+918223927220'; // Replace with the recipient's phone number
const smsMessage = 'Thanks for shopping with veggies shopping ! We would love to hear about your product quality experience ';

sendSMS(recipientPhoneNumber, smsMessage);
