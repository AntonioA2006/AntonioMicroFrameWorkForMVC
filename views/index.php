
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

  * { box-sizing: border-box; margin: 0; padding: 0; }
.wrap {
    font-family: 'DM Sans', sans-serif;
    width: 100vw;
    min-height: 100vh;
    background: #0d0b0e;

    display: flex;
    align-items: stretch;

    border-radius: 0;
    overflow: hidden;
}body {
    margin: 0;
    padding: 0;
}html, body {
    width: 100%;
    height: 100%;
    margin: 0;
}

  .panel-left {
    width: 42%;
    background: linear-gradient(160deg, #1a0e2e 0%, #0d0b0e 60%);
    padding: 3rem 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 0.5px solid rgba(255,255,255,0.07);
    position: relative;
    overflow: hidden;
  }

  .panel-left::before {
    content: '';
    position: absolute;
    top: -80px; left: -80px;
    width: 260px; height: 260px;
    background: radial-gradient(circle, rgba(167,139,250,0.18) 0%, transparent 70%);
    pointer-events: none;
  }

  .panel-left::after {
    content: '';
    position: absolute;
    bottom: 40px; right: -60px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(236,72,153,0.12) 0%, transparent 70%);
    pointer-events: none;
  }

  .logo-area { position: relative; z-index: 1; }

  .logo-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(167,139,250,0.12);
    border: 0.5px solid rgba(167,139,250,0.3);
    border-radius: 50px;
    padding: 6px 14px;
    margin-bottom: 2.5rem;
  }

  .logo-badge span {
    font-size: 11px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #c4b5fd;
    font-weight: 500;
  }

  .dot-badge {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #a78bfa;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.4; }
  }

  .panel-left h1 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    line-height: 1.2;
    color: #f5f3ff;
    font-weight: 400;
    margin-bottom: 1rem;
  }

  .panel-left h1 em {
    font-style: italic;
    color: #c4b5fd;
  }

  .panel-left p {
    font-size: 14px;
    color: rgba(255,255,255,0.45);
    line-height: 1.7;
    font-weight: 300;
  }

  .art-previews {
    display: flex;
    gap: 10px;
    margin-top: 2.5rem;
    position: relative; z-index: 1;
  }

  .art-thumb {
    flex: 1;
    height: 90px;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
  }

  .art-thumb-1 { background: linear-gradient(135deg, #4c1d95, #7c3aed, #c4b5fd); }
  .art-thumb-2 { background: linear-gradient(135deg, #831843, #db2777, #f9a8d4); }
  .art-thumb-3 { background: linear-gradient(135deg, #065f46, #059669, #6ee7b7); }

  .art-thumb::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.2);
  }

  .bottom-note {
    font-size: 12px;
    color: rgba(255,255,255,0.25);
    position: relative; z-index: 1;
  }

  .bottom-note a {
    color: #a78bfa;
    text-decoration: none;
    cursor: pointer;
  }

  .panel-right {
    flex: 1;
    background: #111013;
    padding: 3rem 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .form-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #f5f3ff;
    font-weight: 400;
    margin-bottom: 0.4rem;
  }

  .form-sub {
    font-size: 13px;
    color: rgba(255,255,255,0.35);
    margin-bottom: 2rem;
  }

  .field-group {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-bottom: 14px;
  }

  .field {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 14px;
  }

  .field.half { margin-bottom: 0; }

  label {
    font-size: 11px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.45);
    font-weight: 500;
  }

  input[type=text], input[type=email], input[type=password], select {
    background: rgba(255,255,255,0.05) !important;
    border: 0.5px solid rgba(255,255,255,0.12) !important;
    border-radius: 8px !important;
    color: #f5f3ff !important;
    font-family: 'DM Sans', sans-serif !important;
    font-size: 14px !important;
    padding: 10px 14px !important;
    width: 100% !important;
    height: auto !important;
    outline: none !important;
    transition: border-color 0.2s, background 0.2s !important;
    -webkit-appearance: none !important;
  }

  input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, select:focus {
    border-color: rgba(167,139,250,0.6) !important;
    background: rgba(167,139,250,0.06) !important;
  }

  input::placeholder { color: rgba(255,255,255,0.2) !important; }

  select { cursor: pointer; }
  select option { background: #1a1820; color: #f5f3ff; }

  .pass-wrap { position: relative; }
  .pass-wrap input { padding-right: 40px !important; }
  .pass-toggle {
    position: absolute; right: 12px; top: 50%;
    transform: translateY(-50%);
    background: none; border: none; padding: 0;
    color: rgba(255,255,255,0.3);
    cursor: pointer; font-size: 16px;
    line-height: 1;
  }
  .pass-toggle:hover { color: rgba(255,255,255,0.6); }

  .interests-label {
    font-size: 11px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.45);
    font-weight: 500;
    margin-bottom: 8px;
  }

  .chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 14px;
  }

  .chip {
    padding: 5px 12px;
    border-radius: 50px;
    font-size: 12px;
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    border: 0.5px solid rgba(255,255,255,0.15);
    background: rgba(255,255,255,0.04);
    color: rgba(255,255,255,0.5);
    cursor: pointer;
    transition: all 0.15s;
  }

  .chip:hover { border-color: rgba(167,139,250,0.4); color: #c4b5fd; }

  .chip.active {
    background: rgba(167,139,250,0.15);
    border-color: rgba(167,139,250,0.5);
    color: #c4b5fd;
  }

  .divider {
    display: flex; align-items: center; gap: 12px;
    margin: 1.2rem 0;
  }

  .divider-line { flex: 1; height: 0.5px; background: rgba(255,255,255,0.08); }
  .divider span { font-size: 11px; color: rgba(255,255,255,0.2); }

  .btn-submit {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    background: #7c3aed;
    color: #fff;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    letter-spacing: 0.03em;
    transition: all 0.2s;
    position: relative;
    overflow: hidden;
  }

  .btn-submit:hover { background: #6d28d9; transform: translateY(-1px); }
  .btn-submit:active { transform: translateY(0); }

  .btn-submit.loading { pointer-events: none; }

  .btn-submit .spinner {
    display: none;
    width: 16px; height: 16px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
    position: absolute; left: 50%; top: 50%;
    transform: translate(-50%, -50%);
  }

  @keyframes spin { to { transform: translate(-50%, -50%) rotate(360deg); } }

  .btn-submit.loading .btn-text { opacity: 0; }
  .btn-submit.loading .spinner { display: block; }

  .success-msg {
    display: none;
    text-align: center;
    padding: 1.5rem;
    animation: fadeIn 0.4s ease;
  }

  @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }

  .success-icon {
    width: 52px; height: 52px;
    border-radius: 50%;
    background: rgba(52,211,153,0.15);
    border: 0.5px solid rgba(52,211,153,0.4);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 1rem;
    font-size: 22px;
  }

  .success-msg h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    color: #f5f3ff;
    font-weight: 400;
    margin-bottom: 0.5rem;
  }

  .success-msg p { font-size: 13px; color: rgba(255,255,255,0.4); }

  .error-msg {
    display: none;
    background: rgba(239,68,68,0.1);
    border: 0.5px solid rgba(239,68,68,0.3);
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 12px;
    color: #fca5a5;
    margin-bottom: 14px;
  }

  .strength-bar {
    display: flex; gap: 4px; margin-top: 6px;
  }

  .s-seg {
    height: 3px; flex: 1; border-radius: 2px;
    background: rgba(255,255,255,0.08);
    transition: background 0.3s;
  }

  .s-seg.weak { background: #ef4444; }
  .s-seg.medium { background: #f59e0b; }
  .s-seg.strong { background: #10b981; }
</style>


<div class="wrap">
  <div class="panel-left">
    <div class="logo-area">
      <div class="logo-badge">
        <div class="dot-badge"></div>
        <span>Galería Arte</span>
      </div>
      <h1>El arte que <em>inspira,</em><br>en un solo lugar.</h1>
      <p>Únete a nuestra comunidad de artistas y coleccionistas. Descubre obras únicas de todo el mundo.</p>
      <div class="art-previews">
        <div class="art-thumb art-thumb-1"></div>
        <div class="art-thumb art-thumb-2"></div>
        <div class="art-thumb art-thumb-3"></div>
      </div>
    </div>
    <p class="bottom-note">¿Ya tienes una cuenta? <a onclick="sendPrompt('Quiero ver la pantalla de inicio de sesión')">Inicia sesión →</a></p>
  </div>

  <div class="panel-right">
    <div id="form-area">
      <p class="form-title">Crea tu cuenta</p>
      <p class="form-sub">Regístrate gratis y empieza a explorar</p>

      <div id="error-box" class="error-msg"></div>

      <div class="field-group">
        <div class="field half">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" placeholder="María">
        </div>
        <div class="field half">
          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" placeholder="García">
        </div>
      </div>

      <div class="field">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" placeholder="maria@ejemplo.com">
      </div>

      <div class="field">
        <label for="tipo">Soy...</label>
        <select id="tipo">
          <option value="">Selecciona tu perfil</option>
          <option value="artista">Artista</option>
          <option value="coleccionista">Coleccionista</option>
          <option value="aficionado">Aficionado al arte</option>
          <option value="galeria">Representante de galería</option>
        </select>
      </div>

      <div class="field">
        <label for="pass">Contraseña</label>
        <div class="pass-wrap">
          <input type="password" id="pass" placeholder="Mínimo 8 caracteres">
          <button class="pass-toggle" onclick="togglePass()" aria-label="Mostrar contraseña">
            <i class="ti ti-eye" aria-hidden="true"></i>
          </button>
        </div>
        <div class="strength-bar">
          <div class="s-seg" id="s1"></div>
          <div class="s-seg" id="s2"></div>
          <div class="s-seg" id="s3"></div>
          <div class="s-seg" id="s4"></div>
        </div>
      </div>

      <p class="interests-label">Me interesa</p>
      <div class="chips">
        <button class="chip active" onclick="toggleChip(this)">Pintura</button>
        <button class="chip" onclick="toggleChip(this)">Escultura</button>
        <button class="chip" onclick="toggleChip(this)">Fotografía</button>
        <button class="chip" onclick="toggleChip(this)">Arte digital</button>
        <button class="chip" onclick="toggleChip(this)">Grabado</button>
        <button class="chip" onclick="toggleChip(this)">Instalaciones</button>
      </div>

      <button class="btn-submit" id="submit-btn" onclick="handleSubmit()">
        <span class="btn-text">Crear cuenta</span>
        <div class="spinner"></div>
      </button>

    </div>?

    <div class="success-msg" id="success-area">
      <div class="success-icon">
        <i class="ti ti-check" style="font-size:24px; color:#34d399" aria-hidden="true"></i>
      </div>
      <h3>¡Bienvenida a la galería!</h3>
      <p>Tu cuenta ha sido creada.<br>Revisa tu correo para confirmar tu registro.</p>
    </div>
  </div>
</div>

<script>
function toggleChip(el) {
  el.classList.toggle('active');
}

function togglePass() {
  const p = document.getElementById('pass');
  const btn = p.parentElement.querySelector('.pass-toggle i');
  if (p.type === 'password') {
    p.type = 'text';
    btn.className = 'ti ti-eye-off';
  } else {
    p.type = 'password';
    btn.className = 'ti ti-eye';
  }
}

document.getElementById('pass').addEventListener('input', function() {
  const v = this.value;
  const segs = [document.getElementById('s1'), document.getElementById('s2'), document.getElementById('s3'), document.getElementById('s4')];
  segs.forEach(s => { s.className = 's-seg'; });
  if (!v) return;
  let score = 0;
  if (v.length >= 6) score++;
  if (v.length >= 10) score++;
  if (/[A-Z]/.test(v) && /[0-9]/.test(v)) score++;
  if (/[^A-Za-z0-9]/.test(v)) score++;
  const cls = score <= 1 ? 'weak' : score <= 2 ? 'medium' : 'strong';
  for (let i = 0; i < score; i++) segs[i].classList.add(cls);
});
async function submitData() {

    const formData = new FormData();

    formData.append('titulo', 'Mi obra');

    let request = await fetch('http://localhost:4000/login', {
        method: 'POST',
        body: formData
    });

    let input = await request.json();

    console.log(input[0]);
}
function handleSubmit() {
  const nombre = document.getElementById('nombre').value.trim();
  const email = document.getElementById('email').value.trim();
  const pass = document.getElementById('pass').value;
  const tipo = document.getElementById('tipo').value;
  const err = document.getElementById('error-box');

  err.style.display = 'none';

  if (!nombre || !email || !pass || !tipo) {
    err.textContent = 'Por favor completa todos los campos requeridos.';
    err.style.display = 'block';
    return;
  }

  if (!/\S+@\S+\.\S+/.test(email)) {
    err.textContent = 'Ingresa un correo electrónico válido.';
    err.style.display = 'block';
    return;
  }

  if (pass.length < 8) {
    err.textContent = 'La contraseña debe tener al menos 8 caracteres.';
    err.style.display = 'block';
    return;
  }

  const btn = document.getElementById('submit-btn');
  btn.classList.add('loading');

  setTimeout(function() {
    document.getElementById('form-area').style.display = 'none';
    document.getElementById('success-area').style.display = 'block';
  }, 1800);
  submitData();
}

function socialLogin(provider) {
  const err = document.getElementById('error-box');
  err.style.display = 'none';
  sendPrompt('¿Cómo integraría el login con ' + provider + ' en mi página de obras de arte con PHP?');
}
</script>
