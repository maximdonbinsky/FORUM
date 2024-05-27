/**
 * jQuery LiteSmileys plugin ver. 1.0
 *
 * (c) 2021 Lead Pepelats
 * https://lead-pepelats.ru/blog/jquery-lite-smileys/
 *
 * Example:
 *  $('textarea').litesmileys();
 *  or
 *  $('textarea').litesmileys({ 'smileys': [':)',':(',':D','😃','😄'] });
 */
 !function(i){
    i.fn.litesmileys=function(e){
        var n=i.extend({
            smileys:["😀","😉","😁","😆","😅","😂","🤣","😊","🙃","😇","😚","🥰","😍","😘","🤩","😋","😜","🤪","🤑","🤔","🤭","🤗","🤫","🤨","😏","😑","😒","🙄","🤐","🤥","😔","😴","🤤","🥶","🤧","😷","🤯","🥴","😵","🤒","🥵","🤮","🤕","🤢","😎","🧐","😧","🥺","😫","😱","😞","😯","😭","😩","😨","🥱","😳","😰","😥","😤","😈","😡","💀","👿","🤬","😠","💩","🤡","👽","👻","🤖","👹","🙉","🙊","🙈","💯","💑","👪","👫","💋","🖤","❤","💞","💔","💘","💘","💤","🤚","👋","🖐","🤙","🤞","🤟","🤏","👌","✌","🖕","👆","👇","👈","👉","☝","🤜","🤛","👍","✊","👊","👎","👐","🤝","👏","🤲","🙏","🙌","✍","💅","🤳","💪","👀","👶","👴","👵","👩","🧔","🤦","🤷","🙅","🙆","🤱","🤰","👰","🧕","👸","🤴","🎅","👼","🧟","💆","💃","🚴","🏊","🏂","🏄","🧘","🎂","🍭","🍫","🍺","🥂","🍻","🍾","🍷","🍼","☕","🌹","🌷","🌻","☔","☁","☀","🌙","₽","€","$","🦠","🔥","🏖","🎢","🎡","✈","🛫","⚡","☃","🎄","🎅","🎉","🎁","","","","","","","","","","","","",""]
        },e);
        return this.each(function(){
            var r=this;
            if(i(r).data("litesmileys"))return!1;
            i(r).data("litesmileys",!0),"textarea"!==this.tagName.toLocaleLowerCase()&&i.error("Plugin can work only with TEXTAREA elements"),i.isArray(n.smileys)||i.error("smileys list must be passed as array");
            var e,t=i("<div />").attr({unselectable:"on",onselectstart:"return false;",onmousedown:"return false;"});
            for(e in n.smileys){
                var s=i("<span />").css({cursor:"pointer"}).on("click",function(){
                    var e=i(this).text(),t=r.selectionStart,s=r.selectionEnd;i(r).val(i(r).val().substring(0,t)+e+i(r).val().substring(s)),r.setSelectionRange(t+2+e.length,t+e.length)
                })
                .text(n.smileys[e]).attr("title","Вставить в текст");
                t.append(s)
            }
            t.insertAfter(this)
        })
    }
}(jQuery);
