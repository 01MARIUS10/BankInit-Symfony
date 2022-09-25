function myFunction() {
  let x = document.getElementById('headerElementHide');
  console.log(x);
  if (x.style.visibility === 'hidden') {
    x.style.visibility = 'visible';
  } else {
    x.style.visibility = 'hidden';
  }
  console.log("ok");
}