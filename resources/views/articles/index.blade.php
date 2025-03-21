@foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->titre }}</td>
                      
                    </tr>
                @endforeach