# Book Rental System

## Requirement

stakeholder: `shop owner`
features:

- create bookshelf
- create book
  book doesn't have to be exist in shop, owner just want to create it
  owner can set price, duration, category, series
- inbound book into shop
  there's a time when owner bought a book and register it into shop
  and book might have more than one books in the same title
  owner need to print a barcode and paste on the book
  each barcode represent the unique id of the book
- put book into shelf
  owner need to put book into shelf by scan book's barcode and shelf's barcode
- find book
  to find book, owner need to enter book code and system will give the book status and shelf location
- register customer
  customer need to have an account
  and their code use to rent and return books
- rent
  owner need to scan customer code first
  then scan book to rent
  then system will calculate total price and display due date for each book
  after paid system generate invoice
- return
  owner need to scan book code
  system will calculate total fine if book are past the due date
  and wait for confirm, after paid system generate invoice
- dashboard
  owner should have a dashboard to view today tasks
  - late return customer: display customer name, telephone, total fine and total books
  - customer profile: display customer info, rent history, un-return book, total spend on rent, total spend on fine
  - book list: book name, book code, location, rent status
  - book detail: book info, how many books we have, location of book, total earn, total earn from rent, total earn from fine
  - client status
    book rental store should have a single screen for owner to watch
    and client screen for customer to rent or return by himself
    in dashboard it should show state of client screen: idle, renting, returning, error (with error message)
  - earning
    I want to see earning for each hours

## Architect

- Database
  - redis (GCP, free plan)
    use as message broker and database
- Hosting
  - Firebase function for API
  - Firebase hosting for customer screen
  - Firebase hosting for owner screen
- Stack
  - Typescript
  - Nuxt.js
  - Firebase function

## API

### Customer

- create rent session
  `POST /me`
  ```json
  // response current customer information
  {
    "allow": true,
    " customer": {...}
  }
  ```
- Add a book into rent session
  `PUT /rent`
  ```json
  // request
  {
    "books": "{BOOK_CODE}"
  }
  // response current cart data
  {
    "items": [
      {
        "book": "{BOOK_CODE}",
        "due_date": "...",
        "qty": "...",
        "amount": "..."
      }
    ],
    "customer": "{CUSTOMER_CODE}",
    "total_amount": "..."
  }
  ```
- Remove book from rent session
  `DELETE /rent`
  ```json
  {
    "books": "{BOOK_CODE}"
  }
  ```
- Get rent info
  `GET /rent`
- Confirm rent
  `POST /rent`
-

###
