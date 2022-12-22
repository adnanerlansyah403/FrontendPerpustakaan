<html>
    <head>
        <title>@yield("title", "Fetch Data")</title>
    </head>

    <style>
        ul {
            padding: 0;
            margin: 0;
            /* display: flex;
            align-items: center;
            gap: 10px; */
        }
        li { list-style: none; }
        

        /* REUSED STYLES */

        .section {
            padding-block: 60px;
        }

        .container {
            padding-inline: 60px;
        }


        /* Custom CSS Element */
        details {
            border: 1px solid #aaa;
            border-radius: 4px;
            padding: 1rem;
        }

        summary {
            font-weight: bold;
            margin: -.5em -.5em 0;
            padding: .5em;
        }

        details[open] {
            padding: 1rem;
        }

        details[open] summary {
            border-bottom: 1px solid #aaa;
            margin-bottom: 1rem;
        }

    </style>
    <body>

        <nav class="container">
            <ul style="display: flex; align-items: center; gap: 10px;">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/">Author</a>
                </li>
                <li>
                    <a href="/">Category</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            @yield("content_master")
        </div>
        
    </body>
</html>