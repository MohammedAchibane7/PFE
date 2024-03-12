<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styling for the table */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
            border-spacing: 0;
        }
        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody+tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        /* Custom style for the first column */
        .table th:first-child,
        .table td:first-child {
            font-weight: bold;
            text-align: center; /* Align text in the first column */
        }
        /* CSS */
.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}
.button-container {
  display: flex;
  justify-content: flex-end; /* Align items to the end of the container */
}
    </style>
</head>
<body>
<x-Adminmaster>
    <div class="container">
    <div class="button-container">
    <a href="{{ route('registration.create', ['view' => 'candidat']) }}" role="button" class="button-3">+ Ajouter candidat</a>
</div>

  
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    <th scope="col">voir plus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidats as $candidat)
                <tr>
                    <td>{{ $candidat->id }}</td>
                    <td><img src="{{ asset('storage/'.$candidat->image) }}" alt="Candidat Image" class="profile-image"></td>
                    <td>{{ $candidat->nom }}</td>
                    <td>{{ $candidat->prenom }}</td>
                    <td>{{ $candidat->CIN }}</td>
                    <td>{{ $candidat->email }}</td>
                    <td>
                        <div class="action-dots float-end">
                            <div class="d-flex justify-content-center mx-3"> <!-- Center the buttons and add margin on the y-axis -->
                                <a class="btn btn-warning me-2" href="{{ route('candi.edit',$candidat->id) }}"> <!-- Add margin to the right of the button -->
                                    <svg class="feather feather-edit" fill="none"  height="15px" width="15px" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </a> 
                                <form method="POST" action="{{ route('candi.destroy', $candidat->id) }}">
                                    @csrf
                                    @method('DELETE')  
                                    <button type="submit" class="btn btn-danger">
                                    <svg height="15px" width="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon style="fill:#F4B2B0;" points="178.652,462.067 110.276,462.067 82.918,106.177 178.652,106.177 "></polygon> <path style="fill:#B3404A;" d="M311.198,70.475c-8.484,0-15.365-6.88-15.365-15.365V30.73H189.232V55.11 c0,8.484-6.88,15.365-15.365,15.365s-15.365-6.88-15.365-15.365V15.365C158.503,6.88,165.383,0,173.867,0h137.331 c8.484,0,15.365,6.88,15.365,15.365V55.11C326.563,63.596,319.684,70.475,311.198,70.475z"></path> <path style="fill:#F4B2B0;" d="M380.052,319.948l16.391-213.769H300.71v267.369C313.965,342.592,344.435,320.72,380.052,319.948z"></path> <g> <path style="fill:#B3404A;" d="M470.304,392.923c-8.484,0-15.365,6.88-15.365,15.365c0,40.242-32.741,72.983-72.983,72.983 c-40.243,0-72.984-32.741-72.984-72.983c0-34.479,24.522-63.845,57.028-71.208c0.011-0.002,0.02-0.005,0.031-0.006 c2.303-0.521,4.645-0.93,7.022-1.223c0.048-0.006,0.095-0.011,0.143-0.017c1.119-0.135,2.245-0.244,3.377-0.329 c0.081-0.006,0.164-0.014,0.246-0.018c1.183-0.083,2.374-0.14,3.571-0.166c8.077-0.171,14.554-6.544,15.005-14.475l15.282-199.302 h26.991c8.484,0,15.365-6.88,15.365-15.365s-6.88-15.365-15.365-15.365h-41.224h-95.735H178.652H82.918H41.695 c-8.484,0-15.365,6.88-15.365,15.365s6.88,15.365,15.365,15.365h26.994l26.268,341.704c0.615,8.005,7.291,14.186,15.32,14.186 h68.376h47.866c8.484,0,15.365-6.88,15.365-15.365c0-8.484-6.88-15.365-15.365-15.365h-32.501V121.542h91.327v248.965 c-4.648,11.891-7.103,24.653-7.103,37.779c0,57.188,46.526,103.712,103.714,103.712s103.712-46.525,103.712-103.712 C485.669,399.802,478.788,392.923,470.304,392.923z M316.075,121.542h63.782l-14.131,184.302c-0.069,0.011-0.137,0.026-0.206,0.035 c-0.931,0.147-1.856,0.32-2.781,0.492c-0.273,0.052-0.545,0.103-0.817,0.158c-16.835,3.283-32.529,10.675-45.846,21.666V121.542 H316.075z M163.287,446.703h-38.782L99.509,121.542h63.779v325.161H163.287z"></path> <path style="fill:#B3404A;" d="M403.685,408.297l7.968-7.968c6-6,6-15.729,0-21.73c-6.001-5.998-15.727-5.998-21.73,0l-7.968,7.968 l-7.968-7.968c-5.998-5.995-15.724-5.998-21.73,0c-6,6-6,15.729,0,21.73l7.968,7.968l-7.968,7.968c-6,6-6,15.729,0,21.73 c3.001,2.999,6.933,4.5,10.864,4.5c3.932,0,7.864-1.501,10.864-4.5l7.968-7.968l7.968,7.968c3.001,2.999,6.933,4.5,10.864,4.5 c3.932,0,7.864-1.501,10.864-4.5c6-6,6-15.729,0-21.73L403.685,408.297z"></path> </g> </g></svg></a>     
                                    </button>
                                </form>                                                                             
                                </div>  
                            </div>
                    </td>
                    <td><a class="btn btn-primary" href="{{ route('candid.show', $candidat->id) }}">voir plus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-Adminmaster>
</body>
</html>
