function tabularComEnter(e){
    if (e.keyCode==13){
        if ((e.target.type != 'submit') || (e.target.tagName != 'BUTTON')){
            e.preventDefault();
        }
            
        let frm = document.forms;
        let foco = document.activeElement;
        for (let i in frm){
            for (let j in frm[i]){
                if (frm[i][j]=== foco){
                    frm[i][parseInt(j)+1].focus();
                    break;
                }
            }
        }
    }
    
}







/* Formatação e validação de inputs utilizando apenas HTML5
    Data = type="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2012-01-01" max="2014-02-18"
    Hora = type="time" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$"
    Telefone = pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$";
    Apenas letras = pattern="[a-z\s]+$"
    Apenas números = pattern="[0-9]+$"
    E-mail = type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
    Campos obrigatórios = required="required";
    Quantidade mínima de caracteres = minlength="x"
*/