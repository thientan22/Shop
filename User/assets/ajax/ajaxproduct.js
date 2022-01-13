$('#boxlo').on('click',
function()
{
document.getElementById('boxinputlo').style.display = "flex";
})
$('#boxinputlo').on('click',
function()
{
    document.getElementById('boxinputlo').style.display = "none";
})
document.querySelector('#location').addEventListener('click',
    function(event)
    {
        event.stopPropagation();
    })
document.querySelector('.update').addEventListener('click',
    function(event)
    {
        event.stopPropagation();
    })
$('.update').on('click',
function()
{
    var malocation = $('#malocation').val();
    var location = $('#location').val();
    var mskh = $('#mskh').val();
    $.get
    (
        "./assets/php/main.php",
        {mskh: mskh, location:location, func: 1},
        function(data)
        {
            $("#result").html(data);
        }
    )
    document.getElementById('result').style.display = "flex";
})
$('.buy_add button').on('click',
function()
{
    var mskh = $('#mskh').val();
    var masp = $('#masp').val();
    var soluong = $('.quantity').val();
    $.get
    (
        "./assets/php/main.php",
        {mskh: mskh, masp: masp, soluong: soluong, func: 2},
        function(data)
        {
            $('#result').html(data);
        }
    )
    document.getElementById('result').style.display = "flex";
    setTimeout
    (
        function()
        {
        document.getElementById('result').style.display = "none";
        },
        1500
    )
})
