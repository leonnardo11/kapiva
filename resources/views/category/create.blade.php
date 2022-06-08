<main>
    <div class="edit-container">
      <div class="form-edit">
          <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

            <label for="name">Nome da categoria</label>
            <input type="text" name="name" id="name" placeholder="Nome da categoria">
          <button type="submit">Salvar</button>
        </form>
      </div>
    </div>
  </main>
