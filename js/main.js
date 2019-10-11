
navigator.mediaDevices.getUserMedia({ audio: false, video: true }).then(function(stream){
  console.log(stream)
  var video = document.querySelector('#v');
    video.src = window.URL.createObjectURL(stream);
}).catch(function(err) {
  /* manejar el error */
});