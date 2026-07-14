<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9fafb; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <h2 style="color: #111827; border-bottom: 2px solid #e5e7eb; padding-bottom: 10px;">Pesan Baru dari Portfolio</h2>
        
        <p style="color: #6b7280; font-size: 14px;">Halo Admin, Anda menerima pesan baru melalui website portfolio:</p>
        
        <div style="margin-top: 20px;">
            <p style="margin: 5px 0;"><strong style="color: #374151; width: 100px; display: inline-block;">Nama:</strong> {{ $messageData['name'] }}</p>
            <p style="margin: 5px 0;"><strong style="color: #374151; width: 100px; display: inline-block;">Email:</strong> <a href="mailto:{{ $messageData['email'] }}" style="color: #2563eb;">{{ $messageData['email'] }}</a></p>
            <p style="margin: 5px 0;"><strong style="color: #374151; width: 100px; display: inline-block;">Subjek:</strong> {{ $messageData['subject'] }}</p>
        </div>

        <div style="margin-top: 20px; padding: 15px; background: #f3f4f6; border-radius: 8px; border-left: 4px solid #111827;">
            <p style="margin: 0; color: #1f2937; white-space: pre-wrap;">{{ $messageData['message'] }}</p>
        </div>

        <p style="margin-top: 30px; color: #9ca3af; font-size: 12px; text-align: center;">Pesan ini dikirim otomatis dari sistem portfolio.</p>
    </div>
</body>
</html>