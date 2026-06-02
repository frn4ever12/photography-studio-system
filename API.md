# API DOCUMENTATION

## Photography Studio Management System REST API

### Base URL
```
http://localhost:8000/api
```

### Authentication
All API endpoints require Bearer token authentication.

### Bookings Endpoints

#### Get All Bookings
```
GET /api/bookings
```

Response:
```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "client_id": 1,
      "booking_type": "Wedding Photography",
      "booking_date": "2026-06-15",
      "booking_time": "10:00:00",
      "total_amount": 50000,
      "advance_amount": 10000,
      "booking_status": "Confirmed",
      "payment_status": "Partial"
    }
  ]
}
```

#### Create Booking
```
POST /api/bookings
```

Request:
```json
{
  "client_id": 1,
  "package_id": 1,
  "booking_type": "Wedding Photography",
  "booking_date": "2026-06-15",
  "booking_time": "10:00",
  "event_location": "Kathmandu",
  "event_type": "Wedding",
  "duration_hours": 8,
  "total_persons": 150,
  "total_amount": 50000,
  "advance_amount": 10000
}
```

#### Get Booking Details
```
GET /api/bookings/{id}
```

#### Update Booking
```
PUT /api/bookings/{id}
```

#### Delete Booking
```
DELETE /api/bookings/{id}
```

### Clients Endpoints

#### Get All Clients
```
GET /api/clients
```

#### Get Client Details
```
GET /api/clients/{id}
```

### Invoices Endpoints

#### Get All Invoices
```
GET /api/invoices
```

#### Get Invoice Details
```
GET /api/invoices/{id}
```

#### Generate Invoice PDF
```
POST /api/invoices/{id}/pdf
```

### Payments Endpoints

#### Get All Payments
```
GET /api/payments
```

#### Record Payment
```
POST /api/payments
```

Request:
```json
{
  "booking_id": 1,
  "amount": 10000,
  "payment_date": "2026-06-02",
  "payment_method": "Bank Transfer",
  "payment_status": "Completed"
}
```

### Gallery Endpoints

#### Get All Galleries
```
GET /api/galleries
```

#### Get Gallery Items
```
GET /api/galleries/{id}/items
```

### Status Codes

- `200` - Success
- `201` - Created
- `400` - Bad Request
- `401` - Unauthorized
- `403` - Forbidden
- `404` - Not Found
- `422` - Unprocessable Entity
- `500` - Server Error

### Error Response Format

```json
{
  "success": false,
  "message": "Error message",
  "errors": {
    "field": ["Error description"]
  }
}
```

### Pagination

```
GET /api/bookings?page=1&per_page=15
```

### Filtering

```
GET /api/bookings?booking_status=Confirmed&payment_status=Paid
```

### Sorting

```
GET /api/bookings?sort=-booking_date
```

For descending order, use `-` prefix. For ascending, no prefix needed.
