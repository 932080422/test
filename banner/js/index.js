let ad_banner = document.getElementById("ad_banner");
let banners = ad_banner.children;
let ad_dots = document.getElementById("ad_dots");
let dots = ad_dots.children;
let find_nodes = function(node){
    let brothers = node.parentNode.children;
    let nodes = [];
    for(let i=0;i<brothers.length;i++){
        if(brothers[i]!=node){
            nodes.push(brothers[i]);
        }
    }
    return nodes;
}
let deal_nodes = function(node,name){
    node.classList.add(name);
    let nodes = find_nodes(node);
    for(let i = 0;i<nodes.length;i++){
        nodes[i].classList.remove(name);
    }
}
for(let i = 0;i<dots.length;i++){
    dots[i].addEventListener("click",function(){
        deal_nodes(dots[i],"active");
        deal_nodes(banners[i],"show");
    });
}
let s = find_nodes(dots[1]);
for(let i = 0 ; i<s.length;i++){
    console.log(s[i]);
}