<style>
    .btn-register {
        background: #F38C1E;
    }

    .btn-register:hover {
        background: #c9741a;
        color: #fff;
    }

    .menu_active_top {
        background: #F38C1E !important;
        border-radius: 20px !important;
    }

    .close-button {
        float: right;
        width: 1.5rem;
        font-size: 1.2em;
        line-height: 1;
        padding: 0 .2em .15em;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: var(--clr-neutral);
        color: var(--clr-dark);
        transition: color 0.12s ease-in-out;
    }

    .close-button:hover {
        color: var(--clr-main);
    }

    .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }

    .modal {
        visibility: hidden;
        opacity: 0;
        position: fixed;
        width: 100%;
        z-index: 100;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(77, 77, 77, .7);
        transition: all 0.4s;
        height: 100vh;
    }

    .modal:target {
        visibility: visible;
        opacity: 1;
        overflow: hidden !important;
    }

    .modal__content {
        border-radius: 4px;
        position: relative;
        width: 760px;
        max-width: 90%;
        background: #fff;
        padding: 1em 2em;
    }

    .modal__footer {
        text-align: right;
    }

    .modal__footer a {
        color: #585858;
    }

    .modal__footer i {
        color: #d02d2c;
    }

    .modal__close {
        position: absolute;
        top: 5px;
        right: 5px;
        color: #585858;
        text-decoration: none;
        font-size: 30px;
        padding: 0 10px;
    }

    .active {
        color: #ffff !important;
    }

    #productModal p{
        margin-bottom:10px !important; 
    }
</style>
<div style="overflow: scroll !important;" id="productModal" class="modal" >
    <div class="modal__content">
        <div id="productModal-content">

        </div>

        {{-- <a href="#" class="modal__close">&times;</a> --}}
    </div>
</div>