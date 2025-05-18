<?php
require_once 'dbh.inc.php';
$userId = $_SESSION['user']['id'];
$stmt = $pdo->prepare("SELECT * FROM saved_laws WHERE user_id = :uid ORDER BY saved_at DESC");
$stmt->execute([':uid' => $userId]);
$saved = $stmt->fetchAll();

if ($saved): ?>
  <h3>Your Saved Laws</h3>
  <ul style="list-style: none; padding: 0;">
    <?php foreach ($saved as $law): ?>
      <li style="margin-bottom: 12px; display: flex; justify-content: space-between; align-items: center;">
        <a href="<?= htmlspecialchars($law['law_link']) ?>" style="color: #5F00FF; text-decoration: none; font-weight: 600;">
          <?= htmlspecialchars($law['law_title']) ?>
        </a>
        <form method="POST" action="unsave_law.php" style="margin-left: 12px;">
          <input type="hidden" name="law_id" value="<?= $law['id'] ?>">
          <button type="submit" style="padding: 4px 10px; border: none; background: #ff4c4c; color: white; border-radius: 6px; cursor: pointer;">
            ✖ Unsave
          </button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  <p>You have no saved laws yet.</p>
<?php endif; ?>