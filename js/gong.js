function back() {
    history.back()
}
function choose(file) {
    formdata = new FormData();
   var pic = file.files[0]
   console.log(pic);
  // FileRender类  渲染类
  var reader = new FileReader();
  reader.readAsDataURL(pic)
   console.log(reader)
   reader.onload = function(){
  var fdsfe = document.querySelector('label[for="'+file.id+'"]')
     
       fdsfe.innerText = ""
    var img = document.createElement('img');
    img.className = "girjogior"
    img.src = this.result
    fdsfe.appendChild(img)
     
   }
 
  }
  function search() {
        location.href = "./page/search.html"
  }
  function tuichu(){
    localStorage.clear();
    location.href = "../index.html"
  }
  // 查id
  
  function chaid() {
    $.ajax({
type: "post",
url: "http://localhost/phpbox/onlinepro/php/execute/chaxx.php",
data: {
    type :2,   qm:window.localStorage['signature']  },

success: function (response) {
var sdfghh = JSON.parse(response)
  window.useridg = sdfghh.data[0].id
   console.log(useridg);
}
});
}