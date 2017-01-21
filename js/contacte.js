
function getContactHTML(contact){
    return ' <tr>'+
        '<td>'+contact.firstName+'</td>'+
        '<td>'+contact.lastName+'</td>'+
        '<td>'+contact.phone+'</td>'+
        '</tr>';

}

//document.getElementsByTagName('tbody')[0].innerHTML+=contact;
//document.getElementById('agenda').getElementsByTagName('tbody')[0].innerHTML += contact;

//$('#agenda tbody').html(contact);

var contacts = [
    {firstName:'Alina' , lastName:'Papp' , phone:'0770511315'},
    {firstName:'Eva' , lastName:'Ionescu' , phone:'0011654322'},
    {firstName:'Anda' , lastName:'Dumitru' , phone:'0055123787'}
];
function showContacts(contacts){
    var contactsHTML = '';

    for(var i = 0; i < contacts.length; i++){
        console.info(contacts[i]);
        contactsHTML += getContactHTML(contacts[i]);
    }
    $('#agenda tbody').html(contactsHTML);

}

showContacts(contacts);

$.ajax('servlets/contacts.json', {
    succes: function (contacts) {
        console.info('contacts loaded',contacts);
        showContacts(contacts);
    }
});
