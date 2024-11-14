### Overview for Vampire: The Masquerade Character Tools Web Interface

#### For Storytellers (SPC Wizard):
1. **Character Creation Wizard** - A step-by-step guided process for building SPCs.
   - Steps include choosing Clan, Sire, Backgrounds, Predator Type, Merits/Flaws, and allocating attributes, skills, disciplines, etc.
   - Every step will include a "randomly" generated option that should be intelligently weighted, providing a more tailored and context-aware character generation.
2. **Character Customization Options** - Detailed adjustment options for adding unique flavor to SPCs.
3. **SPC Overview Summary** - An easy review and edit page before finalizing the character.
4. **Session-Based In-Progress Saving** - Character data will be stored in sessions or memory during the Wizard process, avoiding any database or file system dependencies.
5. **Output Options** - Generate an HTML Character Sheet, with options for PDF and JSON download links.

#### For Players (Pregen Generator):
1. **Random Pregen Generator** - Generate characters by selecting broad criteria (e.g., Clan, Generation). All data will be held temporarily in memory or sessions.
2. **Customization on Pregens** - Minor tweaks allowed before finalizing the character.
3. **Output Options** - HTML Character Sheet, with PDF and JSON download links.

### Key Approach
- **Frontend-Only Data Management in Phase 1**: All data related to character creation and generation will be handled strictly in memory or sessions while in progress. No database, file storage, or backend persistence.
- **API Role**: Keep it simple—strictly responding to requests and validating input without storing state.

