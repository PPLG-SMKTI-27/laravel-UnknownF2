<?php
// Theme partial: green + wheat
?>
<style>
:root{
  --green-900:#0b3d2e;
  --green-800:#0f5132;
  --green-700:#146c43;
  --wheat:#f5deb3;
  --wheat-2:#f7e7c6;
  --text:#0b3d2e;
  --muted:#2f4f3a;
  --card:rgba(255,255,255,.86);
  --border:rgba(11,61,46,.18);
  --shadow:0 16px 40px rgba(11,61,46,.18);
}
*{box-sizing:border-box}
html,body{height:100%}
body{
  margin:0;
  font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
  color:var(--text);
  background:
    radial-gradient(900px 500px at 20% 10%, rgba(245,222,179,.75), transparent 60%),
    radial-gradient(900px 500px at 80% 0%, rgba(20,108,67,.20), transparent 55%),
    linear-gradient(135deg, rgba(245,222,179,.65), rgba(245,222,179,.35));
}
.shell{max-width:980px;margin:0 auto;padding:28px 18px 42px}
.topbar{
  display:flex;align-items:center;justify-content:space-between;
  padding:14px 16px;border:1px solid var(--border);
  border-radius:14px;background:var(--card);box-shadow:var(--shadow);
}
.brand{display:flex;gap:10px;align-items:center}
.logo{
  width:38px;height:38px;border-radius:12px;
  background:linear-gradient(135deg,var(--green-700),var(--green-900));
  box-shadow:0 10px 25px rgba(11,61,46,.25);
}
.brand h1{font-size:16px;line-height:1.2;margin:0}
.brand p{font-size:12px;margin:2px 0 0;color:var(--muted)}
.grid{display:grid;grid-template-columns:1.1fr .9fr;gap:18px;margin-top:18px}
@media (max-width:860px){.grid{grid-template-columns:1fr}}
.card{background:var(--card);border:1px solid var(--border);border-radius:16px;padding:18px;box-shadow:var(--shadow)}
.hero h2{margin:0 0 8px;font-size:22px}
.hero p{margin:0;color:var(--muted);line-height:1.55}
.badge{
  display:inline-flex;align-items:center;gap:8px;
  padding:7px 10px;border-radius:999px;
  border:1px solid rgba(20,108,67,.28);
  background:rgba(245,222,179,.55);
  color:var(--green-900);font-size:12px;margin-top:12px
}
.form h2{margin:0 0 12px;font-size:18px}
label{display:block;font-size:12px;color:var(--muted);margin:10px 0 6px}
input,select{
  width:100%;padding:10px 12px;border-radius:12px;
  border:1px solid rgba(11,61,46,.24);
  background:rgba(255,255,255,.9);
  outline:none;
}
input:focus,select:focus{border-color:rgba(20,108,67,.55);box-shadow:0 0 0 4px rgba(20,108,67,.12)}
.actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:14px}
.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:8px;
  padding:10px 14px;border-radius:12px;text-decoration:none;
  border:1px solid transparent;font-weight:600;font-size:13px;cursor:pointer
}
.btn-primary{background:linear-gradient(135deg,var(--green-700),var(--green-900));color:#fff}
.btn-primary:hover{filter:brightness(1.05)}
.btn-ghost{background:rgba(245,222,179,.65);border-color:rgba(11,61,46,.22);color:var(--green-900)}
.btn-ghost:hover{background:rgba(245,222,179,.9)}
.btn-danger{background:#b42318;color:#fff}
.small{font-size:12px;color:var(--muted);margin-top:10px}
.footer{margin-top:16px;font-size:12px;color:rgba(47,79,58,.85)}
.menu{display:flex;gap:10px;flex-wrap:wrap;margin-top:12px}
</style>
