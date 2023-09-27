<x-mail::message>
# Welcome to Our Event!

Hello {{ $user->name }},

THe Veritas 2024 class welcomes you! We are thrilled to have you as a registered attendee for our upcoming event.

<x-mail::table>
| Event Details | |
| ------------------ | -------------------- |
| **Seminar Title:** | Conquer your demons |
| **Date:** | 1st November, 2023 |
| **Time:** | 10:00 am |
| **Location:** | Hall of Mercy, FUTO |
</x-mail::table>


<x-mail::table>
| Registration Details | |
| ------------------------- | ------------------------- |
| **Name:** | {{ $user->name }} |
| **Email:** | {{ $user->email }} |
| **Phone Number:** | {{ $user->phone_number }} |
</x-mail::table>

We can't wait to share valuable insights, tips, and tricks with you as you embark on your internship journey. This
seminar is all about helping you succeed!

If you have any questions or need further information, please feel free to reach out to us at support@irise.com.

See you at the seminar and get ready to level up your internship game!

Warm regards,
</x-mail::message>
