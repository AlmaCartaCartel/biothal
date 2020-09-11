@extends('admin.layouts.app')

@section('content')
    <div class="container" data-toggle="buttons">
        <div class="page-header w-100 alert bg-light p-0 shadow-sm mt-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                <div class="btn btn-group pull-right">
                    <button type="button" class="btn btn-secondary">Добавить</button>
                    <button type="button" class="btn btn-secondary">Удалить</button>
                    <button type="button" class="btn btn-secondary">Скидки</button>
                </div>
            </div>

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Main')" id="defaultOpen">Основные</button>
                <button class="tablinks" onclick="openCity(event, 'Datas')">Данные</button>
                <button class="tablinks" onclick="openCity(event, 'Relations')">Связи</button>
                <button class="tablinks" onclick="openCity(event, 'Img')">Изображения</button>
                <button class="tablinks" onclick="openCity(event, 'Sale')">Скидки</button>
                <button class="tablinks" onclick="openCity(event, 'Tabs')">Вкладки</button>
            </div>

            <!-- Tab content -->
            <div id="Main" class="tabcontent">
                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Основное</h3>
                <p>В этом табе будет поле для заполнения названия товара, текстовый редактор для заполнения описания
                    товара, поля для мета тега тайтла и поле для мета тега описания.</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@Название</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Название товара" aria-label="Product_name"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Описание:</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Мета тег title" aria-label="Meta_title"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@title</span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Мета тег description:</span>
                    </div>
                    <textarea class="form-control" aria-label="description"></textarea>
                </div>
            </div>

            <div id="Datas" class="tabcontent">
                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Данные</h3>
                <p>В этом табе будет выпадающий список модели товара ( это как я понял назначение товара), поле для
                    ввода краткого описания, англ. название, артикул, объем, старая цена, цена, колличество, возраст
                    (выбор из списка), минимальное количество и чекбокс вычитать из склада, отсутствие на складе
                    выпадающий список дат (нужно расписать какие даты туда запихнуть), чекбокс необходима доставка, поле
                    SEO URL, дата поступления, три поля для указания размеров товара, выпадающий список с выбором
                    еденицы измерения, поле для ввода веса товара, поле для выбора еденицы изменения веса, выпадающий
                    список статусов (тоже нужно расписать какие статусы будут у товара), и поле для ввода порядка
                    сортировки товара.</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Модель</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Выберите модель...</option>
                        <option value="1">Машина</option>
                        <option value="2">Мясо</option>
                        <option value="3">ТРАВА</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Краткое описание:</span>
                    </div>
                    <textarea class="form-control" aria-label="Краткое_описание"></textarea>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom01">Product name:</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Enter product name"
                               required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom02">Артикул:</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Article"
                               required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom03">Объем:</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Введите объем"
                               required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationCustom04">Старая цена/новая цена</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Старая цена">
                    <input type="text" class="form-control" placeholder="Новая цена">
                    <div class="input-group-append">
                        <span class="input-group-text">$</span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Количество">
                    <input type="text" class="form-control" placeholder="Минимальное количество">
                    <div class="input-group-prepend">
                        <span class="input-group-text"
                              id="validationCustom05">Количество/минимальное количество</span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom01">Возраст:</label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Выберите возраст...</option>
                            <option value="1">14</option>
                            <option value="2">2</option>
                            <option value="3">155</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom02">Присутсвие на складе:</label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">Присутствует на складе</option>
                            <option value="2">Отсутствует на складе</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom03">Дата:</label>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Выберите дату...</option>
                            <option value="1">03.12.2019</option>
                            <option value="2">17.08.2020</option>
                            <option value="3">01.01.2021</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
            </div>

            <div id="Relations" class="tabcontent">
                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Связи</h3>
                <p>В этом табе будет поле для ввода Кода 1С, поле производитель, выпадающий список для выбора
                    категории
                    (можно выбрать несколько), выпадающий список для выбора потребности (можно выбрать
                    несколько),</p>
            </div>

            <div id="Img" class="tabcontent">
                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Изображения</h3>
                <p>Здесь в блоке будет список все добавленных изображений, по нажатию на изображение оно откроется
                    на
                    весь экран, возле каждого изображения будет чекбокс Сделать главным и кнопка удалить (главным
                    можно
                    будет сделать только одно изображение)</p>
                <div class="row">
                    <div class="col-md-4 mb">
                        <img
                            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                            width="200" height="200" class="rounded" alt="user">
                    </div>
                    <div class="col-md-4 mb">
                        <img
                            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                            width="200" height="200" class="rounded" alt="user">
                    </div>
                    <div class="col-md-4 mb">
                        <img
                            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                            width="200" height="200" class="rounded" alt="user">
                    </div>
                </div>
            </div>

            <div id="Sale" class="tabcontent">
                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Скидки</h3>
                <p>здесь можно посмотреть скидки товара, они будут отображатся списком, в формате: название скидки,
                    дата
                    с-по и кнопка удалить.</p>
                <div class="container-fluid m-2">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Название скидки</th>
                            <th scope="col">Начаьная дата</th>
                            <th scope="col">Конечная дата</th>
                            <th scope="col">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Копчик мамонта</th>
                            <td>20000000 д.н.э.</td>
                            <td>700000 д.н.э.</td>
                            <td>
                                <button type="button" class="btn btn-outline-danger fa fa-trash"></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Срань Господня</th>
                            <td>0 н.э.</td>
                            <td>2020 н.э.</td>
                            <td>
                                <button type="button" class="btn btn-outline-danger fa fa-trash"></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Неделя жвавілля</th>
                            <td>16.09.2020</td>
                            <td>23.09.2020</td>
                            <td>
                                <button type="button" class="btn btn-outline-danger fa fa-trash"></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="Tabs" class="tabcontent">
                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                <h3>Вкладки</h3>
                <p>На этой странице будет будет таблица в которой будет отображаться информация о вкладках:
                    заголовок
                    (поле для ввода), содержание (большое поле для ввода), порядок сортировки (поле для ввода
                    номера) и
                    кнопка удалить. В конце блока кнопка добавить блок, по нажатию добавится новый блок. (Мне не
                    совсем
                    понятно что это за вкладки, и для чего они, нужно расписать этот момент).</p>
            </div>
        </div>
    </div>
@endsection
