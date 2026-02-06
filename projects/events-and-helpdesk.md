# Event manager and helpdesk ticket system

## Frontend:

- build an application, that can CRUD events.
- an event consists of:
  - a title`<string>`
  - an occurrence`<date-time>`
  - a description`<string>`
- users can log in, access their events
- users can submit helpdesk tickets

## Helpdesk:

- user submitted helpdesk requests end up here
- the operator can provide answers to requests

## Automated answering:

- The app should be able to automatically answer a few common helpdesk tickets
- The app should also be able to tell, that the user wants a human to answer

## Rules

- The front-end part off the application should only communicate over a REST API with the back-end, authenticated via
  some modern means. (token, JWT, etc.)
- The helpdesk and frontend users should be differentiated in some way, they should not be able to access each-others
  resources