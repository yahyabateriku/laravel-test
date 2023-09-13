<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://blog.bateriku.com/wp-content/uploads/2021/02/BATERIKUNEWLOGO-1024x576.png" width="400" alt="Laravel Logo"></a></p>

## Prerequisites

Assalamualaikum w.b.t,

This respository contains Laravel source code with a simple application for you to continue coding.

Please make sure your machine has the following tools installed:

- PHP 8 and above.
- Git

### Step 1
Clone this repository into your local machine.

### Step 2
Use your favourite IDE to edit the source code.

### Step 3
#### Test requirements
Imagine the system needs to send an SMS everytime a new user is successfully registered, we need build the system for SMS service.

Assume we pick two SMS gateway providers, create two Laravel service class for these providers, provided with the dummy API key:
1. Digi
-- API Key: digi-eK7w3R5sP8oQ1x9L
2. Maxis
-- API Key: maxis-fG2hK9sW5qA1jR3oZ8pL6vN7

### Your task to complete
The source code comes with an interface, SmsInterface.php.

Create two new concrete classes:
1. DigiSmsService class
2. MaxisSmsService class

Create a controller class, SmsController

Complete the test by:
1. Both concrete class implements SmsInterface
2. Then, implement the functions. For send() method, just simply return:
    ```php
    return "Sending message to {$phoneNumber}, message: {$message}, using API Key: {$this->apiKey()}";
3. Within SmsController class:
    1. Create a method that accept Request class to get parameters: phoneNumber and message
    2. Pass the parameters to service methods
    3. Return the response as json

4. Create a new API routes pointing to the SmsController method at #3.
5. Test your API endpoint using Postman or curl or any API Client that you prefer.

### Tips ###
- Use a sensible class/variable naming.
- You can inject/type-hint the interface via constructor, both are acceptable.

### Notes ###
The only thing that you are NOT ALLOWED to use is ChatGPT. This test is just to gauge your knowledge and understanding. We value your passion, thank you.