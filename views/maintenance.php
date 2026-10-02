<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyBlog - Maintenance</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background: #dfe3f4;
            font-family: Arial, Helvetica, sans-serif;
            color: #121212;
        }

        .maintenance-card {
            width: min(1220px, 100%);
            min-height: 900px;
            padding: 68px 80px 48px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 12px 35px rgba(50, 63, 110, 0.08);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* ---------- Brand ---------- */

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 76px;
            font-size: 21px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            border-radius: 4px;
            background: #5d5ae8;
            display: grid;
            place-items: center;
            color: #ffffff;
        }

        .brand-icon span {
            width: 22px;
            height: 16px;
            border: 2px solid #ffffff;
            border-radius: 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            line-height: 1;
            transform: translateY(-1px);
        }

        /* ---------- Text ---------- */

        .eyebrow {
            font-size: 0;
        }

        h1 {
            font-size: clamp(44px, 5vw, 62px);
            line-height: 1.08;
            letter-spacing: -2.5px;
            margin-bottom: 20px;
        }

        .description {
            max-width: 620px;
            font-size: 20px;
            line-height: 1.55;
            color: #3e5060;
            margin-bottom: 30px;
        }

        /* ---------- Illustration ---------- */

        .illustration {
            width: min(650px, 82%);
            margin: 2px auto 28px;
        }

        .illustration svg {
            width: 100%;
            height: auto;
            display: block;
        }

        /* ---------- Bottom message ---------- */

        .bottom-text {
            max-width: 615px;
            font-size: 16px;
            line-height: 1.65;
            color: #7b8792;
            margin-top: 2px;
        }

        .bottom-text a {
            color: #4c57d8;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }

        /* ---------- Responsive ---------- */

        @media (max-width: 800px) {
            body {
                padding: 20px;
                align-items: flex-start;
            }

            .maintenance-card {
                min-height: auto;
                padding: 44px 26px 38px;
            }

            .brand {
                margin-bottom: 52px;
            }

            .description {
                font-size: 17px;
            }

            .illustration {
                width: 95%;
                margin-top: 8px;
            }

            .bottom-text {
                font-size: 14px;
            }
        }

        @media (max-width: 500px) {
            body {
                padding: 10px;
            }

            .maintenance-card {
                padding: 35px 18px 30px;
                border-radius: 7px;
            }

            .brand {
                margin-bottom: 40px;
                font-size: 18px;
            }

            .brand-icon {
                width: 34px;
                height: 34px;
            }

            h1 {
                font-size: 38px;
                letter-spacing: -1.5px;
            }

            .description {
                font-size: 16px;
                margin-bottom: 16px;
            }

            .illustration {
                width: 100%;
                margin-bottom: 18px;
            }
        }
    </style>
</head>

<body>

    <main class="maintenance-card">

        <div class="brand">
            <div class="brand-icon">
                <span>&lt;_</span>
            </div>
            <span>MyBlog</span>
        </div>

        <div class="eyebrow">Maintenance</div>

        <h1>We'll Be Back Soon</h1>

        <p class="description">
            MyBlog is down for scheduled maintenance and
            we expect to be back online in a few minutes.
        </p>

        <!-- Inline SVG illustration -->
        <div class="illustration">
            <svg viewBox="0 0 700 430" role="img" aria-label="Website maintenance illustration">

                <!-- background blobs -->
                <path d="M90 314C36 276 42 201 91 158C130 124 172 125 212 94C251 63 302 62 346 84C390 106 410 147 455 157C502 167 547 196 551 246C557 310 500 349 439 349H154C129 349 105 334 90 314Z"
                      fill="#eef0fb"/>

                <path d="M175 102c0-33 27-60 60-60s60 27 60 60-27 60-60 60-60-27-60-60Z"
                      fill="#eef0fb"/>

                <!-- top decorative triangle and dot -->
                <path d="M473 72l49 25-56 18 7-43Z" fill="#7b7dd6"/>
                <circle cx="523" cy="116" r="6" fill="#5e4538"/>

                <!-- left orange triangle and dot -->
                <path d="M63 238l42 24-51 15 9-39Z" fill="#eab764"/>
                <circle cx="83" cy="296" r="5" fill="#5e4538"/>

                <!-- large monitor stand -->
                <rect x="171" y="144" width="320" height="214" rx="8" fill="#b7c0e0"/>
                <rect x="181" y="155" width="300" height="187" rx="4" fill="#f9faff"/>

                <!-- vertical divider -->
                <rect x="185" y="159" width="77" height="179" fill="#e3e8f8"/>

                <!-- sidebar icon -->
                <rect x="207" y="179" width="27" height="20" rx="3" fill="#bcc5e1"/>
                <circle cx="235" cy="177" r="5" fill="#afbae0"/>

                <rect x="206" y="216" width="34" height="5" rx="2.5" fill="#c1cae4"/>
                <rect x="206" y="231" width="42" height="5" rx="2.5" fill="#c1cae4"/>
                <rect x="206" y="246" width="35" height="5" rx="2.5" fill="#c1cae4"/>
                <rect x="206" y="261" width="46" height="5" rx="2.5" fill="#c1cae4"/>

                <!-- content area -->
                <path d="M309 159h172v179H343c-21-15-38-34-43-56-6-29 9-50 22-69 11-16 1-35-13-54Z"
                      fill="#ffffff"/>

                <rect x="301" y="205" width="120" height="5" rx="2.5" fill="#edf0f8"/>
                <rect x="301" y="221" width="78" height="5" rx="2.5" fill="#edf0f8"/>
                <rect x="301" y="237" width="98" height="5" rx="2.5" fill="#edf0f8"/>
                <rect x="301" y="253" width="64" height="5" rx="2.5" fill="#edf0f8"/>

                <!-- gears -->
                <g opacity="0.55">
                    <circle cx="415" cy="183" r="24" fill="#d8ddf0"/>
                    <circle cx="415" cy="183" r="10" fill="#eef0fb"/>
                    <rect x="407" y="151" width="16" height="12" rx="3" fill="#d8ddf0"/>
                    <rect x="407" y="203" width="16" height="12" rx="3" fill="#d8ddf0"/>
                    <rect x="383" y="175" width="12" height="16" rx="3" fill="#d8ddf0"/>
                    <rect x="435" y="175" width="12" height="16" rx="3" fill="#d8ddf0"/>
                </g>

                <!-- small gear / circles -->
                <g fill="none" stroke="#b6c0e1" stroke-width="7">
                    <circle cx="451" cy="265" r="13"/>
                    <circle cx="425" cy="292" r="8"/>
                </g>

                <!-- monitor base -->
                <path d="M166 359h330l-24 16H190Z" fill="#aab4d8"/>
                <path d="M239 375h182l-18 29H257Z" fill="#b7c0e0"/>
                <path d="M300 375l-34 28M360 375l36 28" stroke="#9ea8cf" stroke-width="9" stroke-linecap="round"/>

                <!-- person -->
                <!-- head -->
                <circle cx="540" cy="140" r="17" fill="#6c4732"/>
                <path d="M527 140c2-16 17-25 31-18 10 5 14 17 11 28-6-4-13-6-20-6-7 0-14-2-22-4Z"
                      fill="#5a3e31"/>

                <!-- hair -->
                <path d="M534 122c-5 6-9 14-8 23 5 0 9-1 13-3l-1-18-4-2Z" fill="#5a3e31"/>

                <!-- neck -->
                <rect x="535" y="155" width="12" height="12" rx="3" fill="#d59e80"/>

                <!-- shirt -->
                <path d="M517 167l21-9 20 9 9 45-20 10-5-26-6 26-23-10 4-45Z"
                      fill="#f0b651"/>

                <!-- overall -->
                <path d="M528 174h39l6 88-44 0-1-88Z" fill="#6e72bf"/>
                <path d="M538 174v88M558 174v88" stroke="#7d82cf" stroke-width="2"/>

                <!-- arm reaching -->
                <path d="M534 171c-19 3-32 16-45 31l-20-18 7-8 19 12c13-20 26-27 37-29l2 12Z"
                      fill="#d59e80"/>

                <!-- hand -->
                <circle cx="463" cy="180" r="5" fill="#d59e80"/>

                <!-- other arm -->
                <path d="M564 173l18 23-12 37-11-5 7-30-15-15 13-10Z" fill="#d59e80"/>

                <!-- legs -->
                <path d="M529 262h16l1 65-14 0-9-65Z" fill="#6e72bf"/>
                <path d="M553 262h14l4 64-14 1-4-65Z" fill="#6e72bf"/>

                <!-- shoes -->
                <path d="M530 326h18l-2 9h-27c0-5 4-9 11-9Z" fill="#4b3428"/>
                <path d="M557 325h14l12 9c2 2-1 6-5 6h-26Z" fill="#4b3428"/>

                <!-- light blue shadow -->
                <ellipse cx="455" cy="343" rx="135" ry="8" fill="#edf0fa"/>
            </svg>
        </div>

        <p class="bottom-text">
          <h1> OOps! </h1>  
          <div> Something went wrong. Please try again later or contact support if the problem persists. </div>
        
        </p>

    </main>

</body>
</html>
