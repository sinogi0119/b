var idck = false;

const sendit = () => {
    const userid = document.regiform._id;
	const userpw = document.regiform._pw;
    const userpw_ch = document.regiform._pwre;
    const usersei = document.regiform._sei;
    const usermei = document.regiform._mei;
    const useremail = document.regiform._email;
    const userseibetsu = document.regiform._seibetsu;


    
    if(userid.value == '') {
        alert('IDを入力してください。');
        
        userid.focus();
        return false;
    }
    if(userpw.value == '') {
        alert('パスワードを入力してください。');
        userpw.focus();
        return false;
    }
    if(userpw_ch.value == '') {
        alert('パスワード再確認を入力してください。');
        userpw_ch.focus();
        return false;
    }
    if(userpw.value != userpw_ch.value) {
        alert('パスワードと再確認が異なります！');
        userpw_ch.focus();
        return false;
    }
    if(usersei.value == '') {
        alert('名字を正しく書いてください。');
        usersei.focus();
        return false;
    }   
    if(usermei.value == '') {
        alert('名字を正しく書いてください。');
        usermei.focus();
        return false;
    }
    if(useremail.value == '') {
        alert('メールアドレスを入力してください。');
        useremail.focus();
        return false;
    }
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
    if(!expEmailText.test(useremail.value)) {
        alert('正しいメールアドレスではありません。');
        useremail.focus();
        return false;
    }
    if(userseibetsu.value == 0) {
        alert('性別を入力してください。');
        return false;
    }
    if(idck==0){
        alert('IDをCHECKしてください。');
        return false;
    }
    if(idck==false){
        alert('使用できないIDです。');
        return false;
    }
    return true;
}

const checkId = () => {
    const userid = document.regiform._id;
    const result = document.querySelector('#result');
    if(userid.value == '') {
        alert('IDを入力してください。');
        userid.focus();
        return false;
    }
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        if(xhr.readyState == XMLHttpRequest.DONE) {
            if(xhr.status == 200) {
                let txt = xhr.responseText.trim();

                if(txt == "O") {
                    result.style.display = "block";
                    result.style.color = "green";
                    result.innerHTML = "使用できるIDです。";
                    idck = true;
                } else {
                    
                    result.style.display = "block";
                    result.style.color = "red";
                    result.innerHTML = "使用できないIDです。";
                    userid.focus();
                    idck = false;
                }
            }
        }
    }
    xhr.open("GET", "checkid.php?id="+userid.value, true);
    xhr.send();
    
}

let isPwdValid = false;
let isSeiValid = false;
let isMeiValid = false;
let isEmailValid = false;
let isSeibetsuValid = false;
let isIDValid = false;

    function checkPwd(){
    const pwd = document.querySelector("#_pw");
    const pwd2 = document.querySelector("#_pwre");

    pwd.classList.remove("is-invalid");
    pwd.classList.remove("is-valid");
    pwd2.classList.remove("is-invalid");
    pwd2.classList.remove("is-valid");

    if(pwd.value == pwd2.value ){
        pwd.classList.add("is-valid");
        pwd2.classList.add("is-valid");
        isPwdValid = true;
    }else{
        pwd.classList.add("is-invalid");
        pwd2.classList.add("is-invalid");
        isPwdValid = false;
    }
}

document.querySelector("#_pw").addEventListener("input",function(){
    checkPwd();
});

document.querySelector("#_pwre").addEventListener("input",function(){
    checkPwd();
});

document.querySelector("#email").addEventListener("input", function(){
     this.classList.remove("is-valid");
     this.classList.remove("is-invalid");
     const inputEmail=this.value;
     const reg= /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
     if(!reg.test(inputEmail)){
        this.classList.add("is-invalid");
        isEmailValid = false;
     }else{
        this.classList.add("is-valid");
        isEmailValid = true;
     }
  });

document.querySelector("#_sei").addEventListener("input",function(){
    this.classList.remove("is-valid");
     this.classList.remove("is-invalid");
     const inputSei=this.value;
     if(inputSei==0){
        this.classList.add("is-invalid");
        isSeiValid = false;
     }else{
        this.classList.add("is-valid");
        isSeiValid = true;
     }
});

document.querySelector("#_mei").addEventListener("input",function(){
    this.classList.remove("is-valid");
     this.classList.remove("is-invalid");
     const inputMei=this.value;
     if(inputMei==0){
        this.classList.add("is-invalid");
        isSeiValid = false;
     }else{
        this.classList.add("is-valid");
        isSeiValid = true;
     }
});

document.querySelector("#_id").addEventListener("input",function(){
    this.classList.remove("is-valid");
     this.classList.remove("is-invalid");
     const inputID=this.value;
     if(inputID==0){
        this.classList.add("is-invalid");
        isIDValid = false;
     }else{
        this.classList.add("is-valid");
        isIDValid = true;
     }
});
