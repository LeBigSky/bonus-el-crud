<section>
    <div class="container">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                  <th>Espece</th>
                  <th>Age</th>
                  <th>Show</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Boissons as $Boisson )
            
                
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <h4>{{ $Boisson['nom'] }}</h4>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $Boisson['prix'] }}</p>
                </td>
                <td>
                    <a class="text-white" style="text-decoration: none" href={{ "show/".$Boisson['id'] }}>
                  <button type="button" class="btn btn-info btn-sm btn-rounded">
                    Show
                  </button>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</section>