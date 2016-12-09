function imageSwitch(name){
  document.getElementById('preview').src=document.getElementById(name).src;

  if(name == "img1" || name=="img2" || name=="img3"){
    document.getElementById('previewDescription').innerHTML="Corners of the space we occupied";
  }
  else if(name == "img4" || name == "img5" || name == "img6"){
    document.getElementById('previewDescription').innerHTML="Light sometimes fills the space you left.";
  }
  else if(name == "img7"){
    document.getElementById('previewDescription').innerHTML="Haunting my own halls.";
  }
  else if(name == "img8"){
    document.getElementById('previewDescription').innerHTML="I spend my moments differently now.";
  }
  else if(name == "img9"){
    document.getElementById('previewDescription').innerHTML = "Idle hands become lost.";
  }
  else{
    document.getElementById('previewDescription').innerHTML = "You left me hanging. To dry, to rot, to die.";
  }
}
