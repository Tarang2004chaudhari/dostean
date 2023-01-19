
    document.querySelector("#file_image").addEventListener("change",function(e){
        if (e.target.files.length ==0) {
            return;
        }
        let file = e.target.files[0];
        let url = URL.createObjectURL(file);

        document.querySelector("#file_image").innerText = file.name;
        document.querySelector("#preview_img").src = url;
    });
    
