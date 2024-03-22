const video = document.getElementById('qr-video');
const resultContainer = document.getElementById('qr-result');
// Access the camera and start streaming
navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
.then(stream => {
video.srcObject = stream;
video.play();
})
.catch(err => console.error('Error accessing the camera:', err));
