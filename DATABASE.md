# DATABASE SCHEMA DOCUMENTATION

## Photography Studio Management System - Database Schema

### Users Table
```sql
id              - Primary Key
name            - User's name
email           - Unique email address
phone           - Contact number
password        - Encrypted password
avatar          - Profile image URL
is_active       - Account status
email_verified_at - Email verification timestamp
created_at      - Creation timestamp
updated_at      - Last update timestamp
```

### Clients Table
```sql
id              - Primary Key
user_id         - Foreign Key (users)
company_name    - Company/Organization name
address         - Physical address
city            - City name
state           - State/Province
postal_code     - ZIP/Postal code
country         - Country (default: Nepal)
gst_number      - GST/Tax number
client_type     - Individual, Corporate, Institution
notes           - Additional notes
is_active       - Account status
created_at      - Creation timestamp
updated_at      - Last update timestamp
```

### Packages Table
```sql
id              - Primary Key
category        - Photography category
name            - Package name
description     - Package description
duration        - Duration in hours
price           - Package price
features        - JSON array of features
image_url       - Package image
is_active       - Availability status
created_at      - Creation timestamp
updated_at      - Last update timestamp
```

### Employees Table
```sql
id              - Primary Key
user_id         - Foreign Key (users)
department      - Photography, Videography, Editing, Administration
position        - Job position
salary          - Monthly salary
joining_date    - Employment start date
employee_type   - Full-time, Part-time, Contract
specialization  - Special skills/expertise
bank_account    - Bank account number
ifsc_code       - Bank IFSC code
created_at      - Creation timestamp
updated_at      - Last update timestamp
```

### Bookings Table
```sql
id                      - Primary Key
client_id               - Foreign Key (clients)
package_id              - Foreign Key (packages)
booking_type            - Type of photography service
booking_date            - Date of event
booking_time            - Time of event
event_location          - Event venue
event_type              - Wedding, Engagement, etc.
duration_hours          - Event duration
total_persons           - Number of people
additional_requirements - Special requests
total_amount            - Total booking cost
advance_amount          - Advance paid
due_amount              - Remaining amount
booking_status          - Pending, Confirmed, Cancelled, Completed
payment_status          - Unpaid, Partial, Paid
photographer_id         - Assigned photographer (FK)
videographer_id         - Assigned videographer (FK)
editor_id               - Assigned editor (FK)
assigned_at             - Assignment timestamp
notes                   - Internal notes
created_at              - Creation timestamp
updated_at              - Last update timestamp
```

### Projects Table
```sql
id                          - Primary Key
booking_id                  - Foreign Key (bookings)
project_name                - Project name
project_code                - Unique project code
status                      - Pending, Confirmed, Shooting, Editing, Delivered, Completed
start_date                  - Project start date
end_date                    - Project completion date
assigned_photographer_id    - Assigned photographer (FK)
assigned_videographer_id    - Assigned videographer (FK)
assigned_editor_id          - Assigned editor (FK)
shooting_location           - Location for shooting
shooting_date               - Date of shooting
shooting_notes              - Shooting details
delivery_date               - Date of delivery
created_at                  - Creation timestamp
updated_at                  - Last update timestamp
```

### Invoices Table
```sql
id                  - Primary Key
booking_id          - Foreign Key (bookings)
invoice_number      - Unique invoice number
invoice_date        - Date of invoice
due_date            - Payment due date
subtotal            - Subtotal amount
tax_amount          - Tax/GST amount
total_amount        - Total invoice amount
payment_received    - Amount received so far
due_amount          - Remaining due amount
status              - Draft, Sent, Paid, Overdue
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Payments Table
```sql
id                  - Primary Key
booking_id          - Foreign Key (bookings)
amount              - Payment amount
payment_date        - Date of payment
payment_method      - Cash, Check, Bank Transfer, Card, Mobile Payment
reference_number    - Transaction reference
payment_status      - Pending, Completed, Failed, Refunded
notes               - Payment notes
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Galleries Table
```sql
id                  - Primary Key
name                - Gallery name
category            - Gallery category
description         - Gallery description
is_featured         - Featured status
is_published        - Publishing status
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Gallery Items Table
```sql
id                  - Primary Key
gallery_id          - Foreign Key (galleries)
media_type          - Image or Video
media_url           - URL to media file
thumbnail_url       - Thumbnail image URL
title               - Media title
description         - Media description
order               - Display order
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Employee Attendance Table
```sql
id                  - Primary Key
employee_id         - Foreign Key (employees)
attendance_date     - Date of attendance
status              - Present, Absent, Leave, Half Day
check_in            - Check-in time
check_out           - Check-out time
remarks             - Additional remarks
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Employee Salary Table
```sql
id                  - Primary Key
employee_id         - Foreign Key (employees)
month               - Month (1-12)
year                - Year
basic_salary        - Basic salary amount
allowances          - Additional allowances
deductions          - Salary deductions
net_salary          - Net salary
payment_date        - Payment date
payment_status      - Pending or Paid
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Account Heads Table
```sql
id                  - Primary Key
head_name           - Account head name
head_type           - Income, Expense, Asset, Liability, Equity
is_active           - Status
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Income Entries Table
```sql
id                  - Primary Key
account_head_id     - Foreign Key (account_heads)
amount              - Income amount
description         - Income description
transaction_date    - Transaction date
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Expense Entries Table
```sql
id                  - Primary Key
account_head_id     - Foreign Key (account_heads)
amount              - Expense amount
description         - Expense description
transaction_date    - Transaction date
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Daily Cashbook Table
```sql
id                  - Primary Key
transaction_date    - Date (unique)
opening_balance     - Opening balance
total_income        - Total income
total_expense       - Total expense
closing_balance     - Closing balance
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Notifications Table
```sql
id                  - Primary Key
user_id             - Foreign Key (users)
type                - Email, SMS, InApp
title               - Notification title
message             - Notification message
data                - JSON data
read_at             - Read timestamp
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Activity Logs Table
```sql
id                  - Primary Key
user_id             - Foreign Key (users)
action              - Action performed
model_type          - Model class name
model_id            - Related model ID
properties          - JSON properties
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

### Nepali Dates Table
```sql
id                  - Primary Key
english_date        - English date (unique)
nepali_date         - Nepali date string
year_bs             - Nepali year
month_bs            - Nepali month
day_bs              - Nepali day
day_name            - Day name in Nepali
created_at          - Creation timestamp
updated_at          - Last update timestamp
```

## Relationships

```
Users
  ├── Client (1:1)
  ├── Employee (1:1)
  └── Role (Many-to-Many via role_user)

Clients
  ├── User (Belongs To)
  └── Bookings (1:Many)

Packages
  └── Bookings (1:Many)

Employees
  ├── User (Belongs To)
  ├── Bookings as Photographer (1:Many)
  ├── Bookings as Videographer (1:Many)
  ├── Bookings as Editor (1:Many)
  ├── Projects as Photographer (1:Many)
  ├── Projects as Videographer (1:Many)
  ├── Projects as Editor (1:Many)
  ├── Attendances (1:Many)
  └── Salaries (1:Many)

Bookings
  ├── Client (Belongs To)
  ├── Package (Belongs To)
  ├── Photographer (Belongs To Employee)
  ├── Videographer (Belongs To Employee)
  ├── Editor (Belongs To Employee)
  ├── Project (1:1)
  ├── Invoice (1:1)
  └── Payments (1:Many)

Projects
  ├── Booking (Belongs To)
  ├── Photographer (Belongs To Employee)
  ├── Videographer (Belongs To Employee)
  └── Editor (Belongs To Employee)

Invoices
  ├── Booking (Belongs To)
  └── Payments (1:Many)

Galleries
  └── Gallery Items (1:Many)

Account Heads
  ├── Income Entries (1:Many)
  └── Expense Entries (1:Many)
```

## Indexes

```
users: email (unique), phone
clients: user_id, is_active
packages: category
employees: user_id, department
bookings: client_id, booking_date, booking_status, payment_status
projects: status, start_date
invoices: invoice_date, status, booking_id
payments: booking_id
galleries: is_featured, is_published
activity_logs: user_id, created_at
notifications: user_id, created_at
```
