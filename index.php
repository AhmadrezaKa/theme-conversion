<?php
/**
 * Main template file for Ahmadreza Portfolio theme.
 *
 * This renders the single-page layout and includes a simple blog loop.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<canvas id="bgCanvas"></canvas>

<nav>
    <div class="nav-inner">
        <a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">AR_</a>
        <div class="nav-links">
            <a href="#about" id="nav-about">About</a>
            <a href="#skills" id="nav-skills">Skills</a>
            <a href="#education" id="nav-education">Education</a>
            <a href="#projects" id="nav-projects">Projects</a>
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" id="nav-blog">Blog</a>
        </div>
    </div>
</nav>

<div class="layout-outer">
    <div class="layout">

        <!-- LEFT -->
        <div class="left-panel">
            <div class="profile-card">
                <div class="profile-photo">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/profile-photo.png' ); ?>" alt="Ahmadreza" />
                </div>
                <div class="profile-name">Ahmadreza</div>
                <div class="profile-role">GIS &amp; FME<br />Specialist</div>
                <div class="profile-divider"></div>
                <div class="profile-socials">
                    <a href="mailto:ahmadreza@email.com" class="soc-btn" title="Email">
                        <svg viewBox="0 0 20 20">
                            <path d="M2 4a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2 0l6 5 6-5H4zm0 2v8h12V6l-6 5-6-5z" />
                        </svg>
                    </a>
                    <a href="#" class="soc-btn" title="LinkedIn">
                        <svg viewBox="0 0 20 20">
                            <path d="M16 2H4a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2zM7 15H5v-5h2v5zm-1-5.8a1.2 1.2 0 110-2.4 1.2 1.2 0 010 2.4zm9 5.8h-2v-2.6c0-.8-.3-1.4-1-1.4-.6 0-.9.4-1 .8v3.2H9V10h2v.8c.3-.5.9-1 1.8-1 1.3 0 2.2.9 2.2 2.7V15z" />
                        </svg>
                    </a>
                    <a href="#" class="soc-btn" title="GitHub">
                        <svg viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16A8 8 0 0010 2zm0 1.5c3.59 0 6.5 2.91 6.5 6.5 0 2.89-1.88 5.35-4.49 6.22-.32-.06-.44-.22-.44-.44v-1.58c0-.54-.18-.89-.38-1.07 1.27-.14 2.6-.62 2.6-2.8 0-.62-.22-1.13-.59-1.52.06-.15.26-.72-.06-1.5 0 0-.48-.15-1.58.59A5.46 5.46 0 0010 8.4c-.49 0-.98.07-1.44.2-1.1-.74-1.58-.59-1.58-.59-.32.78-.12 1.35-.06 1.5-.37.39-.59.9-.59 1.52 0 2.17 1.32 2.66 2.58 2.81-.16.14-.31.39-.37.76-.33.15-1.18.41-1.7-.49 0 0-.31-.56-.9-.6 0 0-.57-.01-.04.36 0 0 .38.18.65.85 0 0 .34 1.04 1.98.69v1.05c0 .22-.12.38-.43.44A6.502 6.502 0 013.5 10c0-3.59 2.91-6.5 6.5-6.5z" />
                        </svg>
                    </a>
                    <a href="#" class="soc-btn" title="ResearchGate">
                        <svg viewBox="0 0 20 20">
                            <path d="M10 2C5.58 2 2 5.58 2 10s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm1 13v-1.06c2.26-.44 4-2.43 4-4.94 0-2.76-2.24-5-5-5S5 7.24 5 10c0 2.51 1.74 4.5 4 4.94V15H6v-1h3V9.5H7V8l3-1 3 1v1.5h-2V14h3v1h-3z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- SPINE -->
        <div class="spine"><div class="spine-line"></div></div>

        <!-- RIGHT -->
        <div class="right-panel">

            <div class="section-block" id="hero">
                <div class="hero-tag" id="hero-tag">GIS &amp; FME Specialist</div>
                <h1 class="hero-title" id="hero-title">
                    I map things,<br />
                    <span>automate stuff,</span><br />
                    &amp; break systems<br />
                    to fix them better.
                </h1>
                <p class="hero-sub" id="hero-sub">
                    Code, logic, and just enough frustration to keep it interesting. Turning messy spatial problems into clean, repeatable solutions.
                </p>
                <div class="hero-cta">
                    <button class="btn btn-primary" id="hero-cta1" onclick="document.getElementById('about').scrollIntoView({behavior:'smooth'})">See My Work</button>
                    <button class="btn btn-outline" id="hero-cta2" onclick="document.getElementById('projects').scrollIntoView({behavior:'smooth'})">Projects</button>
                </div>
            </div>

            <div class="section-block" id="about">
                <div class="section-label">About Me</div>
                <div class="section-title">A GIS brain with a developer's hands.</div>
                <p class="about-text">
                    Over the years I've moved from traditional GIS work into a more technical, developer-leaning role. FME has been a central part of that journey — pushing it beyond visual workflows by embedding Python scripts, integrating APIs, and building systems that respond dynamically to data and context.
                </p>
                <p class="about-text">
                    I also work extensively with ArcGIS and ArcPy, automating spatial tasks and creating clean, efficient pipelines. What keeps me interested isn't just the tech — it's the challenge of making systems smoother, smarter, and more reliable.
                </p>
            </div>

            <div class="section-block" id="skills">
                <div class="section-label">What I Work With</div>
                <div class="section-title">Tools &amp; Technologies</div>
                
                <div class="skills-category">
                    <h3 class="skills-subtitle">Core Platforms</h3>
                    <div class="skills-grid">
                        <div class="skill-badge sk1"><span class="bd" style="background:var(--yellow)"></span>FME Platform</div>
                        <div class="skill-badge sk2"><span class="bd" style="background:var(--grey-light)"></span>ArcGIS</div>
                        <div class="skill-badge sk1"><span class="bd" style="background:var(--yellow)"></span>ArcPy</div>
                        <div class="skill-badge sk2"><span class="bd" style="background:var(--grey-light)"></span>Python</div>
                    </div>
                </div>

                <div class="skills-category">
                    <h3 class="skills-subtitle">Technical Skills</h3>
                    <div class="skills-grid">
                        <div class="skill-badge sk1"><span class="bd" style="background:var(--yellow)"></span>REST APIs</div>
                        <div class="skill-badge sk2"><span class="bd" style="background:var(--grey-light)"></span>Spatial Analysis</div>
                        <div class="skill-badge sk1"><span class="bd" style="background:var(--yellow)"></span>ETL Pipelines</div>
                        <div class="skill-badge sk2"><span class="bd" style="background:var(--grey-light)"></span>Data Automation</div>
                    </div>
                </div>
            </div>

            <div class="section-block" id="education">
                <div class="section-label" id="edu-label">Education</div>
                <div class="section-title" id="edu-title">Academic Background</div>
                <div class="edu-block">
                    <div class="edu-uni" id="edu-uni">University of Twente (ITC), The Netherlands</div>
                    <div class="edu-degree" id="edu-degree">MSc — Geo-information Science and Earth Observation</div>
                    <div class="edu-thesis-row">
                        <div class="edu-thesis-label" id="edu-thesis-label">Thesis</div>
                        <div class="edu-thesis-title" id="edu-thesis-title">Your thesis title goes here — replace with actual title</div>
                        <a href="#" class="edu-thesis-link" id="edu-thesis-link" target="_blank" title="View Thesis">
                            <svg viewBox="0 0 20 20" class="thesis-icon">
                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-block" id="projects">
                <div class="section-label">Work</div>
                <div class="section-title">Selected Projects</div>
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="proj-num" id="p1-num">01 — PIPELINE</div>
                        <div class="proj-title" id="p1-title">Dynamic FME Pipeline System</div>
                        <p class="proj-desc" id="p1-desc">
                            A context-aware FME workflow integrating live API data, Python logic, and dynamic routing for large-scale spatial transformations.
                        </p>
                        <div class="proj-tags"><span class="proj-tag">FME</span><span class="proj-tag">Python</span><span class="proj-tag">API</span></div>
                    </div>
                    <div class="project-card">
                        <div class="proj-num" id="p2-num">02 — AUTOMATION</div>
                        <div class="proj-title" id="p2-title">ArcPy Automation Suite</div>
                        <p class="proj-desc" id="p2-desc">
                            ArcPy scripts automating repetitive cartographic and spatial analysis tasks, significantly reducing manual processing time.
                        </p>
                        <div class="proj-tags"><span class="proj-tag">ArcGIS</span><span class="proj-tag">ArcPy</span><span class="proj-tag">Automation</span></div>
                    </div>
                    <div class="project-card">
                        <div class="proj-num" id="p3-num">03 — ETL</div>
                        <div class="proj-title" id="p3-title">Spatial ETL Redesign</div>
                        <p class="proj-desc" id="p3-desc">
                            Rebuilt a legacy GIS pipeline from scratch — replacing brittle steps with a robust, repeatable ETL process that scales with data.
                        </p>
                        <div class="proj-tags"><span class="proj-tag">ETL</span><span class="proj-tag">FME</span><span class="proj-tag">GIS</span></div>
                    </div>
                    <div class="project-card">
                        <div class="proj-num" id="p4-num">04 — INTEGRATION</div>
                        <div class="proj-title" id="p4-title">API-Connected GIS Workflow</div>
                        <p class="proj-desc" id="p4-desc">
                            Live-data GIS system pulling from REST APIs, processing spatial data on the fly and outputting clean structured results.
                        </p>
                        <div class="proj-tags"><span class="proj-tag">REST API</span><span class="proj-tag">Python</span><span class="proj-tag">Spatial</span></div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>

<div class="footer-outer">
    <div class="footer-inner">
        <footer id="footer-text">Ahmadreza — GIS &amp; FME Specialist · <?php echo esc_html( date_i18n( 'Y' ) ); ?></footer>
    </div>
</div>

<script>
// ── STATIC TOPO BACKGROUND ──
const canvas = document.getElementById('bgCanvas');
const ctx = canvas.getContext('2d');
let W, H, contourLevels = [];

function noise(x, y){
  return (Math.sin(x*1.1+2.3)*Math.cos(y*0.9+1.7)
        + Math.sin(x*0.4+5.1)*Math.cos(y*0.5+3.9)*0.6
        + Math.sin(x*2.3+0.7)*Math.cos(y*1.8+4.2)*0.3
        + Math.sin(x*0.15+8.1)*Math.cos(y*0.2+6.3)*0.8)/2.7;
}

function elevation(nx, ny){
  const peaks=[
    {x:0.50,y:0.48,s:0.18},{x:0.44,y:0.42,s:0.13},{x:0.57,y:0.55,s:0.14},
    {x:0.18,y:0.22,s:0.16},{x:0.28,y:0.30,s:0.12},{x:0.75,y:0.70,s:0.15},
    {x:0.82,y:0.60,s:0.11},{x:0.62,y:0.20,s:0.10},{x:0.12,y:0.65,s:0.12},
    {x:0.90,y:0.32,s:0.09},{x:0.35,y:0.75,s:0.11},{x:0.50,y:0.90,s:0.10},
    {x:0.05,y:0.10,s:0.09},{x:0.95,y:0.88,s:0.08}
  ];
  let h = 0;
  peaks.forEach(p => {
    const dx = nx-p.x, dy = ny-p.y;
    h += Math.exp(-(dx*dx+dy*dy)/(p.s*p.s));
  });
  h += noise(nx*8,ny*8)*0.22 + noise(nx*3.5+1.1,ny*3.5+2.3)*0.14;
  return h;
}

function buildContours(){
  contourLevels = [];
  const BASE_W = 1400, BASE_H = 900, gs = 6;
  const cols = Math.ceil(BASE_W/gs)+1, rows = Math.ceil(BASE_H/gs)+1;
  const grid = [];
  for(let r=0;r<rows;r++){
    grid[r]=[];
    for(let c=0;c<cols;c++) grid[r][c]=elevation(c/cols, r/rows);
  }
  const numLevels=32, minE=0.02, maxE=1.35;
  for(let li=0;li<numLevels;li++){
    const thresh=minE+(li/(numLevels-1))*(maxE-minE);
    const segs=[];
    for(let r=0;r<rows-1;r++){
      for(let c=0;c<cols-1;c++){
        const v=[grid[r][c],grid[r][c+1],grid[r+1][c+1],grid[r+1][c]];
        const px=[c*gs,(c+1)*gs,(c+1)*gs,c*gs];
        const py=[r*gs,r*gs,(r+1)*gs,(r+1)*gs];
        const ipts=[];
        [[0,1],[1,2],[2,3],[3,0]].forEach(([a,b])=>{
          if((v[a]<thresh)!==(v[b]<thresh)){
            const f=(thresh-v[a])/(v[b]-v[a]);
            ipts.push([px[a]+f*(px[b]-px[a]), py[a]+f*(py[b]-py[a])]);
          }
        });
        if(ipts.length===2) segs.push(ipts);
      }
    }
    const t=li/numLevels, alpha=0.055+t*0.085, isIndex=(li%5===0);
    contourLevels.push({segs, alpha:isIndex?alpha*2.2:alpha, isIndex, baseW:BASE_W, baseH:BASE_H});
  }
}

// Draw once — completely static, no scroll shift
function drawContours(){
  contourLevels.forEach(cl => {
    const sx=W/cl.baseW, sy=H/cl.baseH;
    ctx.beginPath();
    cl.segs.forEach(s=>{
      ctx.moveTo(s[0][0]*sx, s[0][1]*sy);
      ctx.lineTo(s[1][0]*sx, s[1][1]*sy);
    });
    ctx.strokeStyle = cl.isIndex
      ? `rgba(180,210,240,${cl.alpha})`
      : `rgba(140,175,215,${cl.alpha})`;
    ctx.lineWidth = cl.isIndex ? 1.0 : 0.65;
    ctx.stroke();
  });
}

let dirty = true;
function resize(){
  W = canvas.width = window.innerWidth;
  H = canvas.height = window.innerHeight;
  dirty = true;
}
window.addEventListener('resize', resize);

function frame(){
  if(dirty){ ctx.clearRect(0,0,W,H); drawContours(); dirty=false; }
  requestAnimationFrame(frame);
}
resize();
buildContours();
requestAnimationFrame(frame);
</script>

<?php wp_footer(); ?>
</body>
</html>

