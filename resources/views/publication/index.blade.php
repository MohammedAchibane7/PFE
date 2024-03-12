<x-master>
    <style>
        /* Night mode styles for publication cards */
        body {
            background-color: #222;
            color: #fff;
        }

        .publication-card {
            border: none;
            border-radius: 15px;
            background-color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .publication-card:hover {
            transform: translateY(-5px);
        }

        .publication-card .card-body {
            padding: 20px;
        }

        .publication-card .card-footer {
            padding: 10px;
            background-color: #444;
            border-radius: 0 0 15px 15px;
        }

        .publication-card .card-footer img {
            max-width: 100%;
            border-radius: 8px;
        }

        .publication-card .btn {
            margin-left: 10px;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            border: 1px solid #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .btn-modify {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .btn-modify:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .blockquote-footer {
            color: #bbb;
        }
    </style>

    <div class="container w-75 mx-auto">
        <h3 class="text-center mb-4">Publications</h3>
        <div class="row">
            @foreach ($publications as $publication)
        <!-- <x-publication :canUpdate="auth()->id() === $publication->profile_id" :publication="$publication"/> -->
        <x-publication  :publication="$publication"/>
            @endforeach
        </div>
    </div>
</x-master>
