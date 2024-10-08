    <style>
        :root {
            color-scheme: dark;
        }

        body {
            display: grid;
            place-content: center;
        }

        #crt:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: linear-gradient(to bottom,
                    rgba(18, 16, 16, 0) 50%,
                    rgba(0, 0, 0, 0.25) 50%);
            background-size: 100% 8px;
            z-index: 2;
            pointer-events: none;
        }

        @keyframes textShadow {
            0% {
                text-shadow: 0.4389924193300864px 0 1px rgba(0, 30, 255, 0.5), -0.4389924193300864px 0 1px rgba(255, 0, 80, 0.3), 0 0 3px;
            }

            5% {
                text-shadow: 2.7928974010788217px 0 1px rgba(0, 30, 255, 0.5), -2.7928974010788217px 0 1px rgba(255, 0, 80, 0.3), 0 0 3px;
            }

            /** etc */
        }

        .scanline {
            width: 100%;
            height: 100px;
            z-index: 8;
            background: linear-gradient(0deg,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(255, 255, 255, 0.2) 10%,
                    rgba(0, 0, 0, 0.1) 100%);
            opacity: 0.1;
            position: absolute;
            bottom: 100%;
            animation: scanline 10s linear infinite;
        }

        @keyframes scanline {
            0% {
                bottom: 100%;
            }

            80% {
                bottom: 100%;
            }

            100% {
                bottom: 0%;
            }
        }
    </style>