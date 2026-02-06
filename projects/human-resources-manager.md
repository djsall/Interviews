# Human Resources Manager

## The task:
- build a system where team members can add request vacations
- calculate the maximum days off a person can have
  - Example from Hungary: the maximum days off depend on a persons age, there is also extra days for having children
  - subtract the Christmas holiday period from the available days off for each person, those are mandatory leave
  - The last work day is the last Friday before the holidays
  - The first work day is the first Monday in the new year, after NYE
  - subtract the Saturday workdays
- there should be two separate permission levels
  - one level will input their leave request
  - another level will approve said leave request
- the system should include a calendar view
- the system should support multiple types of leave:
  - sick leave - no approval needed
  - company-wide "shutdown" vacation - no approval needed
  - regular vacation requests
  - unpaid leave