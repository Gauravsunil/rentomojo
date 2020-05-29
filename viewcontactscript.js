$(document).ready(function(){
    $.ajax({
        url:'./scripts/fetch.php',
        type:'post'
    }).done(function(res){
        res=JSON.parse(res);
        console.log(res);
        display_wrapper(res)
    })
    
})
//----------------------------------------------------------------------------------------------
    function search(){
      var x=document.getElementById("search").value;
      console.log(x);
      data="search="+x;
      $.ajax({
          url:'./scripts/searchscript.php',
          type:'post',
          data:data
      }).done(function(res){
          res=JSON.parse(res);
          display_wrapper(res)
      })
    }
//------------------------This Function is used to do pagination---------------------------------------------------
    function display_wrapper(res){

      length = res.length;
      let wrapper = document.querySelector('.wrapper');    
      wrapper.innerHTML=" ";
      for (i=0;i<length/4;i++){  
        let page=i;
        let but = document.createElement('input');
        but.setAttribute("type","submit");
        but.setAttribute("id",page);
        but.setAttribute("value",page);
        but.onclick=()=>{
          display(res,page);
        }
        wrapper.appendChild(but);
      }
      display(res,0)
    }

//----------------------------------------------------------------------------
    function display(res,page){
        parent1=document.querySelector(".block");
        parent1.innerHTML=" ";
        console.log(page);
        // if(page>0){
        // page=page-1;
        // }
        var j=page;
        console.log(j);
            
        content="";  
        for(i=page*4;i<(j+1)*4;i++){
          if(res[i]!=undefined){    
          content=content+`<button type="button" class="collapsible">${res[i][1]}</button>
                            <div class="content">
                            <div class="row" style="margin:10px">    
                                <div class="col-md-6 ">
                                    <b>${res[i][2]}</b>
                                </div>
                                <div class="col-md-3 col-xs-5">

                                 <a href="EditContact.php?id=${res[i][0]}">
                                    <input type="submit" 
                                          class="btn  btn-success form-control"
                                          value="Edit">
                                  </a>        
                                </div>
                                <div class="col-md-3 col-xs-6">
                                <a href="./scripts/remove.php?id=${res[i][0]}">
                                    <input type="submit" 
                                          class="btn  btn-danger form-control"
                                          value="Remove"
                                          >
                                 </a>         
                                </div>
                                
                             </div>
                             <div class="row" style="margin:10px;padding:20px;height:200px;border:1px solid black">
                                <div class="row">
                                  <div class="col-xs-4">
                                    <span class="fa fa-phone">+91 ${res[i][3]}</span>
                                  </div>
                                  <div class="col-xs-4">
                                    <span class="fa fa-envelope">${res[i][4]}</span>
                                  </div>
                                </div>
                             </div>
                            </div>
                                
                                `;
          }
        } 
    //     
    
    parent1.innerHTML=content;
    content=" ";
    
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

    }
//-------------------------------------------------------------------------------------------------------  
