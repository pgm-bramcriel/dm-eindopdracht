<div class="nav__left">
    <a class="logo" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="84.207" height="70.721" viewBox="0 0 84.207 70.721">
            <g id="piano" transform="translate(0 -41.001)">
                <path id="Path_9" data-name="Path 9" d="M203.921,179.417H178.393v-6.065a.677.677,0,0,1,.677-.677h24.173a.677.677,0,0,1,.677.677v6.065Z" transform="translate(-149.053 -110.018)" fill="#464646"/>
                <g id="Group_4" data-name="Group 4" transform="translate(1.61 82.113)">
                <path id="Path_10" data-name="Path 10" d="M14.212,320.584H10.445a.658.658,0,0,1-.658-.658v-28.95H14.87v28.95A.658.658,0,0,1,14.212,320.584Z" transform="translate(-9.787 -290.976)" fill="#353535"/>
                <path id="Path_11" data-name="Path 11" d="M475.733,320.584h-3.767a.658.658,0,0,1-.658-.658v-28.95h5.083v28.95A.658.658,0,0,1,475.733,320.584Z" transform="translate(-395.403 -290.976)" fill="#353535"/>
                </g>
                <path id="Path_12" data-name="Path 12" d="M427.478,86.046a1.234,1.234,0,0,1-1.12-.714L416,63.027a1.234,1.234,0,0,1,2.238-1.039l10.357,22.3a1.234,1.234,0,0,1-1.118,1.753Z" transform="translate(-347.487 -16.939)" fill="#595959"/>
                <path id="Path_13" data-name="Path 13" d="M88.313,45.276l-71.566,23.7a2.16,2.16,0,0,1-2.732-1.4h0A2.2,2.2,0,0,1,15.4,64.81l71.566-23.7a2.16,2.16,0,0,1,2.732,1.4h0A2.2,2.2,0,0,1,88.313,45.276Z" transform="translate(-11.62)" fill="#464646"/>
                <g id="Group_5" data-name="Group 5" transform="translate(2.287 67.055)">
                <rect id="Rectangle_7" data-name="Rectangle 7" width="5.083" height="25.367" transform="translate(37.275 15.057)" fill="#595959"/>
                <path id="Path_14" data-name="Path 14" d="M93.54,214.479H13.907V199.421H92.882a.658.658,0,0,1,.658.658v14.4Z" transform="translate(-13.907 -199.421)" fill="#595959"/>
                </g>
                <path id="Path_15" data-name="Path 15" d="M472.271,214.479h-5.083V199.421h4.425a.658.658,0,0,1,.658.658Z" transform="translate(-390.351 -132.366)" fill="#464646"/>
                <rect id="Rectangle_8" data-name="Rectangle 8" width="79.633" height="4.399" transform="translate(2.287 77.714)" fill="#ffdea9"/>
                <rect id="Rectangle_9" data-name="Rectangle 9" width="5.083" height="4.399" transform="translate(74.041 77.714)" fill="#ffbf7b"/>
                <g id="Group_6" data-name="Group 6" transform="translate(32.615 99.772)">
                <path id="Path_16" data-name="Path 16" d="M245.631,404.739h-5.083v-3.852a2.54,2.54,0,0,1,2.54-2.54h0a2.54,2.54,0,0,1,2.54,2.54v3.852Z" transform="translate(-233.601 -398.347)" fill="#353535"/>
                <path id="Path_17" data-name="Path 17" d="M203.393,404.739H198.31v-3.852a2.54,2.54,0,0,1,2.54-2.54h0a2.54,2.54,0,0,1,2.54,2.54v3.852Z" transform="translate(-198.31 -398.347)" fill="#353535"/>
                <path id="Path_18" data-name="Path 18" d="M287.868,404.739h-5.083v-3.852a2.54,2.54,0,0,1,2.54-2.54h0a2.54,2.54,0,0,1,2.54,2.54v3.852Z" transform="translate(-268.892 -398.347)" fill="#353535"/>
                </g>
                <path id="Path_19" data-name="Path 19" d="M237.289,230.779h-6.1a1.233,1.233,0,0,1,0-2.467h6.1a1.233,1.233,0,1,1,0,2.467Z" transform="translate(-192.136 -156.505)" fill="#ffdea9"/>
                <path id="Path_20" data-name="Path 20" d="M84.207,264.883v8.836a.658.658,0,0,1-.658.658H.658A.658.658,0,0,1,0,273.718v-8.836a.658.658,0,0,1,.658-.658H5.083v4.4H79.124v-4.4h4.425A.658.658,0,0,1,84.207,264.883Z" transform="translate(0 -186.511)" fill="#464646"/>
                <g id="Group_7" data-name="Group 7" transform="translate(30.074 77.714)">
                <path id="Path_21" data-name="Path 21" d="M485.52,274.376H481.1V264.225h4.425a.658.658,0,0,1,.658.658v8.836A.658.658,0,0,1,485.52,274.376Z" transform="translate(-432.045 -264.225)" fill="#353535"/>
                <path id="Path_22" data-name="Path 22" d="M206.239,433.607h-22.7a.677.677,0,0,1-.677-.677v-3.044a.677.677,0,0,1,.677-.677h22.7a.677.677,0,0,1,.677.677v3.044A.677.677,0,0,1,206.239,433.607Z" transform="translate(-182.857 -402.074)" fill="#353535"/>
                </g>
            </g>
        </svg>
    </a>
</div>

<div class="nav__right">
    <a href="/">home</a>
    <?php
        if(!$current_user) {
            ?>
                <a href="/login">login</a>
                <a href="/register">register</a>
            <?php
        } else {
            ?>
                <a href="/profile">profile</a>
                <a href="/logout">logout</a>
            <?php
        }
        ?>
</div>