
<!-- Modal Deletar -->
<div class="modal fade" id="deleteModalCenter-{{ $product->id ?? '' }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Remover Produto - {{ $product->name ?? '' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.destroy', $product->id ?? '') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="card-body">
                        <div class="row">
                            <h5>Deseja remover esse produto?</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-success">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
