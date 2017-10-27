# alexa-hello

This is a basic Alexa skill. It just say `Hello world`


Run ngrok

```
ngrok http 80
```

You need to configure the following in Amazon Developer Console

## Intent Schema

```
{
  "intents": [
    {
      "intent": "GeneralIntent"
    },
    {
      "slots": [
        {
          "name": "name",
          "type": "PEOPLE_NAME"
        }
      ],
      "intent": "PersonalIntent"
    },
    {
      "intent": "AMAZON.StopIntent"
    },
    {
      "intent": "AMAZON.CancelIntent"
    },
    {
      "intent": "AMAZON.HelpIntent"
    }
  ]
}
```

## Slots

```
PEOPLE_NAME		Juan | Pedro | Erik | Chris
```

## Utterances

```
GeneralIntent Hello
GeneralIntent Hi
GeneralIntent Hey
PersonalIntent Hello {name}
PersonalIntent Hi {name}
PersonalIntent Hey {name}
```

## Link the skill to your code

Rename `.env.sample` file to `.env`

Write the Amazon Skill ID

```
SKILL_ID="AMAZON_SKILL_ID"
```
