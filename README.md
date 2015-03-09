# ccticket
A custom work ticket web app.

This is a custom IT work ticket web app for Converse County Government.  The main requirement that is needing met is that supervisors within a department be allowed to see the status of all tickets submitted by users in that department.  There will need to be sub-groups within a department.

# Feature List
- [ ] End User Accounts - have a unqiue login for each user that will access the site.
  - [ ] Edit profile information
    - [ ] Full Name
    - [ ] Job Title
    - [ ] Email Address
    - [ ] Contact Information
  - [ ] Submit a ticket.
  - [ ] View status of opened tickets.
  - [ ] Review closed tickets.
- [ ] Supervisor Accounts - allow some end users to be made supervisors for a department.  This will allow them to view all tickets submitted by that department.
  - [ ] View all tickets for their department
  - [ ] Review closed tickets
  - [ ] Reopen a closed ticket in the event that the work was not completed satisfactorally.
- [ ] IT Technician Accounts - have a unique login for each IT department employee.
  - [ ] Add notes to a ticket
  - [ ] Send message to end user
  - [ ] Change status of a ticket
  - [ ] Close a ticket
  - [ ] Work Queues - allow technicians to pull a ticket from the wait pool to their specific work pool.
- [ ] IT Admin Accounts - elevated privleges for the IT administrator.
  - [ ] Assign tickets to technicians
  - [ ] 

# Ticket Information
- [ ] User ID
- [ ] Requested Completion Date
- [ ] Priority
- [ ] Description
- [ ] Category - Hardware, Software, etc.
- [ ] Assest
- [ ] Status - Open/In Progress/Closed