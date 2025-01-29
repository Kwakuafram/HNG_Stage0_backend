# Stage 0 Backend - HNG12

This is a public API developed for the HNG12 Internship Stage 0 task. It returns basic information in JSON format.

## Features
- Returns registered email, current datetime (ISO 8601 UTC format), and GitHub repository URL.
- Handles CORS for cross-origin requests.

## API Endpoint
- **GET /**

### **Sample Response**
```json
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/yourusername/your-repo"
}
