<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Messages</h1>

    <div id="message-container"></div>

    <form id="message-form">
        <input type="hidden" name="sender_id" value="1">
        <input type="hidden" name="receiver_id" value="2">
        <textarea name="message" placeholder="Type your message..."></textarea>
        <button type="submit">Send</button>
    </form>

    <script>
        $(document).ready(function() {
            // Fungsi untuk memuat pesan
            function loadMessages() {
                var senderId = $('input[name="sender_id"]').val();
                var receiverId = $('input[name="receiver_id"]').val();

                $.ajax({
                    url: '/message/getMessages/' + senderId + '/' + receiverId,
                    method: 'GET',
                    success: function(response) {
                        var messages = response;

                        var messageContainer = $('#message-container');
                        messageContainer.empty();

                        messages.forEach(function(message) {
                            var sender = message.sender_id == senderId ? 'You' : 'Other';
                            var messageElement = '<div><strong>' + sender + ': </strong>' + message.message + '</div>';
                            messageContainer.append(messageElement);
                        });
                    }
                });
            }

            // Panggil fungsi untuk memuat pesan saat halaman dimuat
            loadMessages();

            // Fungsi untuk mengirim pesan
            $('#message-form').on('submit', function(event) {
                event.preventDefault();

                var senderId = $('input[name="sender_id"]').val();
                var receiverId = $('input[name="receiver_id"]').val();
                var message = $('textarea[name="message"]').val();

                $.ajax({
                    url: '/message/saveMessage',
                    method: 'POST',
                    data: {
                        sender_id: senderId,
                        receiver_id: receiverId,
                        message: message
                    },
                    success: function(response) {
                        // Bersihkan textarea setelah pesan terkirim
                        $('textarea[name="message"]').val('');

                        // Muat ulang pesan
                        loadMessages();
                    }
                });
            });
        });
    </script>
</body>
</html>