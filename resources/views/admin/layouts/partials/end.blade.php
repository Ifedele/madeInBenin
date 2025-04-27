  <!-- ===== Page Wrapper End ===== -->
  <script src="https://unpkg.com/alpinejs" defer></script>
  <script data-cfasync="false" src="{{asset('storage/assetsd/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
  <script defer src="{{asset('storage/assetsd/bundle.js')}}"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91bbbfde884fbd6e","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"67f7a278e3374824ae6dd92295d38f77","b":1}' crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function checkNotifications() {
        fetch('/admin/notifications/check')
            .then(response => response.json())
            .then(data => {
                let notificationButton = document.getElementById('notification-button');
                let notificationCountSpan = document.getElementById('notification-count');
                let notifyingDot = document.querySelector('#notification-button > span:first-child'); // Cibler le point orange

                if (notificationButton && notificationCountSpan && notifyingDot) {
                    notificationCountSpan.textContent = data.count;
                    if (data.count > 0) {
                        notifyingDot.classList.remove('hidden');
                    } else {
                        notifyingDot.classList.add('hidden');
                    }
                }
            })
            .catch(error => {
                console.error('Erreur lors de la vérification des notifications:', error);
            });
    }

    // Vérifier les notifications toutes les 5 secondes
    setInterval(checkNotifications, 5000);
</script>
{{-- <script>
    function showNotificationDetails(id, message, detailsUrl) {
        document.getElementById('notification-full-message').textContent = message;
        const detailsLink = document.getElementById('notification-details-link');
        if (detailsUrl) {
            detailsLink.href = detailsUrl;
            detailsLink.classList.remove('hidden');
        } else {
            detailsLink.classList.add('hidden');
            detailsLink.removeAttribute('href'); // S'assurer qu'il n'y a pas d'ancien lien
        }
        document.getElementById('notification-modal').classList.remove('hidden');
        // Marquer la notification comme lue (optionnel)
        fetch(`/admin/notifications/read/${id}`, { method: 'POST', headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' } });
        // Mettre à jour le compteur (optionnel)
        checkNotifications();
    }

    function closeNotificationDetails() {
        document.getElementById('notification-modal').classList.add('hidden');
    }
</script> --}}


</body>

<!-- Mirrored from demo.tailadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 18:43:50 GMT -->
</html>
