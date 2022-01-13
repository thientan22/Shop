var index = 0;
function changeImg ()
    {
        var imgs = ["url('https://insieutoc.vn/wp-content/uploads/2021/02/mau-banner-quang-cao-khuyen-mai.jpg')" ,"url('https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-dep-8.jpg')"];
        document.querySelector('.banner-slide').style.backgroundImage =  imgs[index];
        index++;
        if(index == 3)
        {
            index = 0;
        }
    }
setInterval(changeImg, 1000);