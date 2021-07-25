function randomImage() {
    let fileNames = [
        "imagesneak/bo.jpeg",
        "imagesneak/melo.jpeg",
      ],
      randomIndex = Math.floor(Math.random() * fileNames.length),
      backgroundImage = 'url(' + fileNames[randomIndex] + ')';
  
    document.getElementById('women').style.backgroundImage = backgroundImage;
  }
  
  randomImage();
  setInterval(randomImage, 500);
 