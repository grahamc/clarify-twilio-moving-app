# Clarify + Twilio = :heart_eyes_cat:

[![Deploy][herokubutton]](https://heroku.com/deploy)

Using MoveApp, your moves will be so easy! Never lose your potato masher again!

Here is how it works:

1. Label all your boxes 1, 2, 3 ...
2. Call your Twilio number
3. When you're packing a box, type in the number of the box and press pound.
4. As you're putting things in the box, say what it is.

When you are unpacking, or looking for some cups to have wine after you're done
moving: simply send MoveApp a text message with "wine glasses" and it'll tell
you what box to look in. Simple!

Example:

 - **You** *dial MoveApp*
 - **MoveApp** Prompts for your box number.
 - **You** *dial 14 and presses pound*
 - **MoveApp** Starts recording (wait for the beep!)
 - **You** *say* Potato masher, wine glasses, Shrunken head, wire cutters, dog
   food.
 - **You** *hang up*

    Lots of moving activity in which Clarify is analyzing your audio. This can
    take up to about a minute of processing time per minute of audio.

 - **You** "I need a drink!"
 - **You** *text MoveApp* "wine glasses"
 - **MoveApp** 'We found "wine glasses" in #14.'

Easy!

## Technical workflow

![workflow][workflow]

 > As a sequence diagram



## Setup

1. Get a Clarify.io account from the [Clarify DevPortal][devportal], create
   an application, and get an API key.
2. Deploy the application somewhere... maybe [heroku][heroku]
3. In the [config.php][config] set the API key in
   `$config['clarify']['api_key']`. If you're using Docker or Heroku or
   something similar, you can simply set the environment variable
   `CLARIFY_API_KEY` to your key.
5. Create a Twilio account and get a telephone number, like it says in the
   [Twilio quickstart][twilio]. Set that telephone number's Voice Request URL
   to `http://example.com/moveapp/start.php` and the SMS Request URL to
   `http://example.com/moveapp/search.php`.
6. Call your number and go to town! Note: This will search all the media in
   your Clarify Account.

### Deploy to Heroku

[![Deploy][herokubutton]](https://heroku.com/deploy)

[workflow]: assets/workflow.png
[devportal]: https://developer.clarify.io/
[config]: config.php
[twilio]: https://www.twilio.com/docs/quickstart
[heroku]: #heroku
[herokubutton]: https://www.herokucdn.com/deploy/button.png
