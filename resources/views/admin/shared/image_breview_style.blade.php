<style>
    .upload_imgone{
        width: 150px;
        height: 150px;
        border: 1px solid #bbb3b4;
        border-radius: 20px;
        margin: auto;
        overflow: hidden;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        padding-bottom: 20px;
    }

    .upload_imgone input[type="file"]{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        font-size: 0;
        opacity: 0;
        transform: scale(3);
        cursor: pointer;
    }

    .uploaded-block{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 5;
    }

    .uploaded-block img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .uploaded-block .close{
        position: absolute;
        top: 10px;
        left: 10px;
        cursor: pointer;
        opacity: 1;
        text-shadow: 0 0 black;
        width: 20px;
        height: 20px;
        background: crimson;
        display: flex;
        justify-content: center;
        /* align-items: center; */
        border-radius: 50%;
        font-size: 17px;
        color: #FFF;
    }

</style>
