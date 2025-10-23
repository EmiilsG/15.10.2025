# Produkta pārvaldības lietotne (Laravel)

Vienkārša Laravel lietotne produktu pārvaldībai ar CRUD funkcionalitāti (Create, Read, Update, Delete).

---

## Funkcijas

- Produktu saraksts ar iespēju apskatīt, labot un dzēst produktus.
- Jauna produkta izveide ar validāciju.
- Detalizēta produkta informācijas skatīšana.
- Responsīvs un lietotājam draudzīgs interfeiss.

---

## Prasības

- PHP >= 8.0
- Composer
- Laravel 10.x (vai atbilstoša versija)
- MySQL vai cits datubāzes dzinējs
- Node.js un npm/yarn (frontend atkarībām)

---

## Instalācija

1. Klonē repozitoriju:
    ```bash
    git clone https://github.com/tavs-lietotajvards/produktu-parvaldisana.git
    cd produktu-parvaldisana
    ```

2. Instalē PHP atkarības ar Composer:
    ```bash
    composer install
    ```

3. Izveido `.env` failu un konfigurē savienojumu ar datubāzi:
    ```bash
    cp .env.example .env
    ```

4. Izveido datubāzes tabulas:
    ```bash
    php artisan migrate
    ```

5. (Pēc izvēles) Aizpildi datubāzi ar testa datiem:
    ```bash
    php artisan db:seed
    ```

6. Instalē frontend atkarības un kompilē stilus:
    ```bash
    npm install
    npm run dev
    ```

7. Palaid lokālo serveri:
    ```bash
    php artisan serve
    ```

8. Atver pārlūkā: `http://localhost:8000/products`

---

## Lietošana

- Dodies uz produktu sarakstu (`/products`) un apskati visus produktus.
- Izmanto pogu "Create new product", lai pievienotu jaunu produktu.
- No saraksta var rediģēt vai dzēst esošos produktus.
- Katram produktam ir detalizēta informācijas lapa.

---

## Koda struktūra

- `app/Http/Controllers/ProductController.php` – kontrolieris CRUD darbībām
- `resources/views/products/` – Blade skati produktu izvadīšanai un formām
- `database/factories/ProductFactory.php` – datu fabriks testa datu ģenerēšanai
- `resources/css/app.css` – stilu faili
- `routes/web.php` – maršruti produktu funkcionalitātei

---

## Validācija

- `name` – obligāts, virkne, maksimums 255 simboli
- `quantity` – obligāts, veselais skaitlis, minimālais 1
- `description` – brīvi aizpildāms teksts

---

## Atbalsts un veidotāji

Veidoja: Tava Vārds
E-pasts: tavs@epasts.lv

Ja ir jautājumi vai ieteikumi, droši sazinies!

---

## Licences

Šis projekts ir pieejams bez maksas un atvērtā koda izmantošanai.

