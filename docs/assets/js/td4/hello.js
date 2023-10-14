$=(id)=>document.getElementById(id);

const bt= $("bt-hello");
console.log(bt);
bt && bt.addEventListener("click", function(){
        alert("Hello !!!!!!")
    });

$("bt-clear").addEventListener("click", function(){
    document.body.innerHTML="";
});

$("bt-dom").addEventListener("click", function(){
    const h2=document.createElement("h2")
    h2.innerText="Sous titre ajouté dynamiquement";
    $("content").appendChild(h2);
    const img=document.createElement("img");
    img.src ="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bbc.com%2Fafrique%2Fmonde-56971662&psig=AOvVaw3g4LN-nq94QuxIlSKc6AKQ&ust=1697205549291000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMC-0cHV8IEDFQAAAAAdAAAAABAb";
    img.style.width="250px";
    $("content").appendChild(img);
});
